<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $products = [
            ['id' => '1', 'category_id' => 1, 'product_name' => 'Chai', 'product_code' => '02015485546', 'root' => 'product-1', 'buying_price' => 2500,'selling_price'=>2600,'supplier_id'=>1,'buying_date'=>'','image'=>'backend/product/1633117503.jpeg','product_quantity'=>25],
            ['id' => '2', 'category_id' => 2, 'product_name' => 'Rice', 'product_code' => '05485546', 'root' => 'product-2', 'buying_price' => 1500,'selling_price'=>1600,'supplier_id'=>1,'buying_date'=>'','image'=>'backend/product/1633117559.jpeg','product_quantity'=>25],
            ['id' => '3', 'category_id' => 2, 'product_name' => 'Suger', 'product_code' => '05515485546', 'root' => 'product-3', 'buying_price' => 8500,'selling_price'=>9600,'supplier_id'=>2,'buying_date'=>'','image'=>'backend/product/1633117609.jpeg','product_quantity'=>25],
            ['id' => '4', 'category_id' => 1, 'product_name' => 'Biscuit', 'product_code' => '044015485546', 'root' => 'product-4', 'buying_price' => 500,'selling_price'=>600,'supplier_id'=>3,'buying_date'=>'','image'=>'backend/product/1633117659.jpeg','product_quantity'=>25],

        ];

        foreach ($products as $item) {
            App\Model\Product::create($item);
        }
    }
}
