<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();
        $CUSTOMERS = [
            ['id' => '1', 'name' => 'Mohamed Zid', 'email' => 'mohammed@gmail.com', 'phone' => '02015485546', 'address' => 'Beirut Lebanon', 'photo' => 'backend/customer/1633117712.jpeg'],
            ['id' => '2', 'name' => 'Sammer Salam', 'email' => 'sammer@gmail.com', 'phone' => '555456687', 'address' => 'Damascus Syria', 'photo' => 'backend/customer/1633117787.png'],

        ];

        foreach ($CUSTOMERS as $item) {
            App\Model\Customer::create($item);
        }
    }
}
