<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;

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
        return [ 'category' => Category::all() ];
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
            Layout::table('category',[
                TD::make('')
            ])
        ];
    }
}
