<?php

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();
        $orders = [
            ['id' => '1', 'customer_id'=>1, 'qty'=>'', 'sub_total'=>'', 'vat'=>'', 'total'=>'1000', 'pay'=>'', 'due'=>'', 'payby'=>'', 'order_date'=>'', 'order_month'=>'', 'order_year'=>''],
            ['id' => '2', 'customer_id'=>2, 'qty'=>'', 'sub_total'=>'', 'vat'=>'', 'total'=>'600', 'pay'=>'', 'due'=>'', 'payby'=>'', 'order_date'=>'', 'order_month'=>'', 'order_year'=>''],


        ];

        foreach ($orders as $item) {
            App\Model\Order::create($item);
        }
    }
}
