<?php

namespace App\Orchid\Screens\Product;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Orchid\Layouts\Product\ProductListTable;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;

class ProductListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавление продукта';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'products.js' => Product::with('category')->filters()->paginate(20),
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
            ModalToggle::make('Создать продукт')->modal('createProduct')->method('storeProduct'),
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
            ProductListTable::class,
            Layout::modal('createProduct', Layout::rows([
                Picture::make('image_path')->targetRelativeUrl()->required(),
                Input::make('name')->title('Название продукта')->placeholder('Введите название')->required(),
                TextArea::make('description')->title('Описание')->placeholder('Введите описание')->required(),
                Group::make([
                    Select::make('category_id')->fromModel(Category::class, 'name')->title('Категория')->empty()->required(),
                    Input::make('price')->title('Цена')->placeholder('Укажите цену')->required(),
                ]),
            ]))->title('Создание продукта')->applyButton('Создать продукт'),
            Layout::modal('editProduct', Layout::rows([
                Input::make('product.id')->type('hidden'),
                Picture::make('product.image_path')->targetRelativeUrl()->required(),
                Input::make('product.name')->title('Название продукта')->placeholder('Введите название')->required(),
                TextArea::make('product.description')->title('Описание')->placeholder('Введите описание')->required(),
                Group::make([
                    Select::make('product.category_id')->fromModel(Category::class, 'name')->title('Категория')->empty()->required(),
                    Input::make('product.price')->title('Цена')->placeholder('Укажите цену')->required(),
                ]),
            ]))->title('Редактирования продукта')->async('asyncUpdateProduct'),
            Layout::modal('deleteProduct', Layout::rows([
                Button::make('Да'),
                Button::make('Нет'),
            ]))->title('Удаление продукта')->async('asyncDestroyProduct')
        ];
    }

    public function storeProduct(ProductRequest $request){
        Product::create($request->validated());

        Toast::success('Успешно');
    }

    public function updateProduct(Request $request){
//        dd(Product::find($request->input('product.id')));
                dd($request->input('product.id'));
    }

    public function asyncUpdateProduct(Product $product_id){
        return [
            'product' => $product_id
        ];
    }

    public function destroyProduct(Request $request){
        dd($request->all());
    }

    public function asyncDestroyProduct(Product $product_id){
        return [
            'product_id' => $product_id
        ];
    }

}
