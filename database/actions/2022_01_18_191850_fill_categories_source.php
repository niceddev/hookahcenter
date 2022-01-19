<?php

use DragonCode\LaravelActions\Support\Actionable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FillCategoriesSource extends Actionable
{

    protected $once = false;

    public function up(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Кальяны',
            ],
            [
                'name' => 'Табаки',
            ],
            [
                'name' => 'Электронки',
            ],
            [
                'name' => 'Колбы',
            ],
            [
                'name' => 'Чаши',
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
