<?php

namespace App\Orchid\Layouts\Product;

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
    protected $target = 'product';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name', 'Название продукта')->width('100px')->cantHide()->filter(TD::FILTER_TEXT),
            TD::make('description', 'Описание')->width('250px'),
            TD::make('category_id', 'Категория')->width('150px')->sort(),
            TD::make('price', 'Цена')->width('100px')->sort(),
        ];
    }
}
