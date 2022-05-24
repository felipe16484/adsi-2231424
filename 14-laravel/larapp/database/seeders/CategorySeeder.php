<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = new Category;
        $cat1->name        = 'PlayStation 5';
        $cat1->image       = 'images/ps5.png';
        $cat1->description = 'Lorem Ipsum Dolor Sit Amet';
        $cat1->save();

        $cat2 = new Category;
        $cat2->name        = 'Xbox Series X';
        $cat2->image       = 'images/seriesx.png';
        $cat2->description = 'Lorem Ipsum Dolor Sit Amet';
        $cat2->save();
        
        $cat3 = new Category;
        $cat3->name        = 'Nintendo Switch';
        $cat3->image       = 'images/switch.png';
        $cat3->description = 'Lorem Ipsum Dolor Sit Amet';
        $cat3->save();

    }
}
