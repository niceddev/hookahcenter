<?php

namespace App\Orchid\Screens\Category;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryListTable;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class CategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавление категории';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'categories' => Category::all()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            ModalToggle::make('Создать категорию')->modal('createCategoryModal')->method('save')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            CategoryListTable::class,

            Layout::modal('createCategoryModal', Layout::rows([
                Input::make('name')->required()
            ]))
                ->title('Создание категории')
                ->applyButton('Создать категорию'),

            Layout::modal('asyncEditCategoryModal', Layout::rows([
                Input::make('category.name')->required()
            ]))
                ->applyButton('Редактировать')
                ->async('asyncUpdateCategory'),
        ];
    }

    public function save(CategoryRequest $request){
        Category::create($request->validated());
        Toast::success('Категория создана');
    }

    public function asyncUpdateCategory(Category $category){
        return [
            'category' => $category
        ];
    }

    public function update(Category $category, Request $request){
        $category->fill($request->post('category'))->save();

        Toast::success('Категория изменена');
    }

    public function remove(Category $category){
        $category->find($category->id)->delete();
        Toast::warning('Категория удалена!');
    }


}
