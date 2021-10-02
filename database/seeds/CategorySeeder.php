<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categories = [
            ['id' => '1', 'category_name' => 'category one'],
            ['id' => '2', 'category_name' => 'category two'],
            ['id' => '3', 'category_name' => 'category three'],
            ['id' => '4', 'category_name' => 'category four'],

        ];

        foreach ($categories as $item) {
            App\Model\Category::create($item);
        }
    }
}
