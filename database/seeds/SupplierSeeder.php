<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->delete();
        $suppliers = [
            ['id' => '1', 'name' => 'Ahmed', 'email' => 'ahmad@gmail.com', 'phone' => '33324587', 'address' => 'Syria Damascus', 'photo' => 'backend/supplier/1633117225.jpeg', 'shopname' => 'SwafTech'],
            ['id' => '2', 'name' => 'سعيد', 'email' => 'said@gmail.com', 'phone' => '0113855454', 'address' => 'سوريا دمشق', 'photo' => 'backend/supplier/1633117368.png', 'shopname' => 'Durra'],
            ['id' => '3', 'name' => 'محمود', 'email' => 'mahmoud@yahoo.com', 'phone' => '', 'address' => 'سوريا حلب', 'photo' => 'backend/supplier/1633117402.png', 'shopname' => 'كهربائيات المصري']

        ];

        foreach ($suppliers as $item) {
            App\Model\Supplier::create($item);
        }
    }
}
