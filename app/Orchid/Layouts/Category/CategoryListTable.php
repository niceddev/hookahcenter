<?php

namespace App\Orchid\Layouts\Category;

use App\Models\Category;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;


class CategoryListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('№')
                ->width('80px')
                ->cantHide()
                ->render(function (Category $category){
                    return $category->id;
                }),
            TD::make('name', 'Категория')
                ->cantHide(),
            TD::make('Редактировать')
                ->width('10px')
                ->alignRight()
                ->cantHide()
                ->render(function (Category $category){
                    return ModalToggle::make('')
                        ->modal('asyncEditCategoryModal')
                        ->modalTitle('Редактирование категории')
                        ->method('update')
                        ->asyncParameters([
                            $category->id
                        ])
                        ->icon('pencil');
                }),
            TD::make('Удалить')
                ->width('10px')
                ->alignRight()
                ->cantHide()
                ->render(function (Category $category){
                    return Button::make('')
                        ->confirm('Вы действительно хотите удалить категорию '.$category->name.'?')
                        ->method('remove')
                        ->icon('trash')
                        ->parameters([
                            $category->id
                        ]);
                })
        ];
    }
}
