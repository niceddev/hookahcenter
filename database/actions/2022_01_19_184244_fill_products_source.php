<?php

use DragonCode\LaravelActions\Support\Actionable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class FillProductsSource extends Actionable
{

    protected $once = false;

    public function up(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Кальян Alpha Hookah Model Beat',
                'description' => 'Слышишь ритм? Его задаёшь ТЫ! ALPHA HOOKAH BEAT MAKE YOUR OWN RHYTHM',
                'price' => 50000,
                'category_id' => 1,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Кальян Alpha Hookah Model S',
                'description' => 'Искусство во плоти. Премиальный кальян, выделяющийся золотыми элементами и асимметричным дизайном.',
                'price' => 68000,
                'category_id' => 1,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Кальян Alpha Hookah Model X',
                'description' => 'Кальяны Alpha Hookah обладают лаконичным дизайном, при этом выглядят очень стильно и подойдут как для домашнего использования, так и для развлекательных заведений.',
                'price' => 48500,
                'category_id' => 1,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Кальян MattPear Simple M',
                'description' => 'Кальян MattPear Simple - один из лучших кальянов на рынке. Шахта кальяна выполнена из нержавеющей стали отличного качества, кроме того он очень технологичный, снабжен магнитным коннектором, диффузором, отлично продувается и прекрасно курится.',
                'price' => 58250,
                'category_id' => 1,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Кальян Mamay Custom Coilovers Micro',
                'description' => 'Яркий и стильный кальян из нержавеющей стали от Mamay Custom. Идеально подойдет как для дома, так и для заведений.',
                'price' => 39000,
                'category_id' => 1,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Табак для кальяна Adalya (Адалия) 50 грамм',
                'description' => 'Табак для кальяна Adalya – турецкий табак с большой линейкой вкусов. Адалия имеет натуральную ароматику, невысокую крепость и хорошую жаростойкость.',
                'price' => 850,
                'category_id' => 2,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Табак для кальяна Daily Hookah (Дэйли Хука) 250 грамм',
                'description' => 'Табак Daily Hookah производится компанией D-Tobacco (производители Dark Side), это некрепкий табак с сочной вкусовой палитрой.',
                'price' => 8000,
                'category_id' => 2,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Табак для кальяна Black Burn (Блэк Берн) 100 грамм',
                'description' => 'В производстве используется только чистый лист сорта Toasted Burley - это определенный бленд крепкого табака, который курится мягче, но при это отлично сохраняет ароматику и крепость. Так же при изготовлении используется кукурузный сироп из Америки, который идеально подходит под табачную основу.',
                'price' => 3500,
                'category_id' => 2,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Табак для кальяна Black Burn (Блэк Берн) 25 грамм',
                'description' => 'В производстве используется только чистый лист сорта Toasted Burley - это определенный бленд крепкого табака, который курится мягче, но при это отлично сохраняет ароматику и крепость. Так же при изготовлении используется кукурузный сироп из Америки, который идеально подходит под табачную основу.',
                'price' => 900,
                'category_id' => 2,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Табак для кальяна Dark Side (Дарк Сайд) 100 грамм',
                'description' => 'Один из лидеров российского кальянного рынка в сегменте темных табаков. DARKSIDE Tobacco производится на основе бленда Burley в 3 линейках крепости с применением технологии Unwashed/Boiled.',
                'price' => 9500,
                'category_id' => 2,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Электронная сигарета Plonq 500',
                'description' => 'Электронная сигарета на 500 затягов',
                'price' => 2500,
                'category_id' => 3,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Электронная сигарета Elf Bar 800',
                'description' => 'Электронная сигарета на 800 затягов',
                'price' => 2500,
                'category_id' => 3,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Pod JustFog Minifit',
                'description' => 'Minifit - это компактная, и простая в освоении pod-система от компании JustFog, предназначенная для использования с жижами на основе солевого никотина.',
                'price' => 7000,
                'category_id' => 3,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Колба для кальяна Level',
                'description' => 'Колба под кальян – необходимый и самый хрупкий структурный элемент. Их изготавливают из стекла, хрусталя, пластика. Вместе с водой служит фильтром для очистки примесей и охлаждает дым.',
                'price' => 6000,
                'category_id' => 4,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Колба для кальяна Craft',
                'description' => 'Колба под кальян – необходимый и самый хрупкий структурный элемент. Их изготавливают из стекла, хрусталя, пластика. Вместе с водой служит фильтром для очистки примесей и охлаждает дым.',
                'price' => 6200,
                'category_id' => 4,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Колба для кальяна Craft Mini',
                'description' => 'Колба под кальян – необходимый и самый хрупкий структурный элемент. Их изготавливают из стекла, хрусталя, пластика. Вместе с водой служит фильтром для очистки примесей и охлаждает дым.',
                'price' => 5000,
                'category_id' => 4,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Колба для кальяна Pizduk',
                'description' => 'Подходит только для кальянов производителя Pizduk',
                'price' => 4000,
                'category_id' => 4,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Чаша для кальяна Kong Milk',
                'description' => 'Идеально подходит для жаростойких и крепких табаков, время прогрева: 3-4 минуты. Идеальна в работе с калаудом и обещает долгий процесс курения.',
                'price' => 3000,
                'category_id' => 5,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Чаша для кальяна Kong Space',
                'description' => 'Идеально подходит для жаростойких и крепких табаков, время прогрева: 3-4 минуты. Идеальна в работе с калаудом и обещает долгий процесс курения.',
                'price' => 3800,
                'category_id' => 5,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Чаша для кальяна Moon Hookah',
                'description' => 'Чаша Moon Hookah — чаша покрыта глазурью. Яркая, легко моется и максимально раскрывает вкус табака. Идеально подойдет для всех типов табака.',
                'price' => 3500,
                'category_id' => 5,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
            [
                'name' => 'Чаша для кальяна ST Classic',
                'description' => 'ST - очень толстостенные с использованием новаторских технологий обработки глины, что позволяет увеличить время курения табака и сохранить его от перегрева, при этом нагревая табак непосредственно через стенки чаши, а не от фольги и калауда.',
                'price' => 3700,
                'category_id' => 5,
                'image_path' => '',
                'created_at' => Carbon::now()->subDays(rand(1,29))
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }

}
