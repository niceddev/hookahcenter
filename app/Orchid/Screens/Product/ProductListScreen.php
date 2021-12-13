<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use App\Orchid\Layouts\Product\ProductListTable;
use Orchid\Screen\Screen;

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
            'product' => Product::with('categories')->filters()->paginate(20),
            ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            ProductListTable::class
        ];
    }
}
