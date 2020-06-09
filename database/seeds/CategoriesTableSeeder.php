<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demoCategories = [
            ["name" => "Articles", "description" => "data from api..."],
            ["name" => "Technology", "description" => "Demo category..."],
            ["name" => "Video Game", "description" => "Demo category..."]
        ];

        foreach ($demoCategories as $category) {

            $Category = new Category();
            $Category->name = $category['name'];
            $Category->description = $category['description'];
            $Category->save();
            
        }
    }
}
