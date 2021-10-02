<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->delete();
        $orderItems = [
            ['id' => '1', 'order_id' => 1, 'product_id' => 4, 'pro_quantity' => 2, 'product_price' => 600, 'sub_total' => 1200],
            ['id' => '2', 'order_id' => 2, 'product_id' => 3, 'pro_quantity' => 1, 'product_price' => 9600, 'sub_total' => 9600],
            ['id' => '3', 'order_id' => 2, 'product_id' => 2, 'pro_quantity' => 1, 'product_price' => 1600, 'sub_total' => 1600],
        ];

        foreach ($orderItems as $item) {
            DB::table('order_details')->insert($item);
        }
    }
}
