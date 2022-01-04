<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Product;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProductListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'products.js';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('image_path', 'Обложка')
                ->render(function(Product $product){
                    return view('includes/image', ['image_path' => $product->image_path]);
                })
                ->width('250px'),
            TD::make('name', 'Название продукта')
                ->width('250px')
                ->cantHide()
                ->filter(TD::FILTER_TEXT),
            TD::make('description', 'Описание')
                ->width('350px'),
            TD::make('category.name', 'Категория')
                ->width('150px')
                ->sort(),
            TD::make('price', 'Цена')
                ->width('100px')
                ->sort(),
            TD::make('Редактировать')
                ->cantHide()
                ->alignRight()
                ->width('10px')
                ->render(function (Product $product){
                    return ModalToggle::make('')
                        ->modal('editProduct')
                        ->method('updateProduct')
                        ->icon('pencil')
                        ->asyncParameters($product->id);
                }),
            TD::make('Удалить')
                ->cantHide()
                ->alignRight()
                ->width('10px')
                ->render(function (Product $product){
                    return ModalToggle::make('')
                        ->modal('deleteProduct')
                        ->method('destroyProduct')
                        ->icon('trash')
                        ->asyncParameters($product->id);
                }),
        ];
    }
}
