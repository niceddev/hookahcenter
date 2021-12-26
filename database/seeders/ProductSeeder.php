<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Кальян Alpha Hookah Model Beat',
                'description' => 'Слышишь ритм? Его задаёшь ТЫ! ALPHA HOOKAH BEAT MAKE YOUR OWN RHYTHM',
                'price' => 50000,
                'category_id' => 1,
                'image_path' => 'storage/hookahs/image.jpg'
            ],
            [
                'name' => 'Кальян Alpha Hookah Model S',
                'description' => 'Искусство во плоти. Премиальный кальян, выделяющийся золотыми элементами и асимметричным дизайном.',
                'price' => 68000,
                'category_id' => 1,
                'image_path' => 'storage/hookahs/image1.jpg'
            ],
            [
                'name' => 'Электронная сигарета Plonq 500',
                'description' => 'Электронная сигарета на 500 затягов',
                'price' => 2500,
                'category_id' => 3,
                'image_path' => 'storage/electronics/image.jpg'
            ],
            [
                'name' => 'Электронная сигарета Elf Bar 800',
                'description' => 'Электронная сигарета на 800 затягов',
                'price' => 2500,
                'category_id' => 3,
                'image_path' => 'storage/electronics/image1.jpg'
            ],
            [
                'name' => 'Pod JustFog Minifit',
                'description' => 'Minifit - это компактная, и простая в освоении pod-система от компании JustFog, предназначенная для использования с жижами на основе солевого никотина.',
                'price' => 7000,
                'category_id' => 3,
                'image_path' => 'storage/electronics/image2.jpg'
            ],
            [
                'name' => 'Колба для кальяна Level',
                'description' => 'Колба под кальян – необходимый и самый хрупкий структурный элемент. Их изготавливают из стекла, хрусталя, пластика. Вместе с водой служит фильтром для очистки примесей и охлаждает дым.',
                'price' => 6000,
                'category_id' => 4,
                'image_path' => 'storage/flasks/image.jpg'
            ],

        ]);
    }
}
