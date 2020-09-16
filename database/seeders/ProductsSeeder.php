<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 100,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
            'price' => 100,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);
         DB::table('products')->insert([
            'image_path' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 1000,
            'cart' => 0,
            'order' => 0,
            'is_deleted' => 0
         ]);

    }
}
