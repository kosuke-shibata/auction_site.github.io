<?php

use Illuminate\Database\Seeder;

class PurchaseHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchase_histories')->insert([
            'id' => 1,
            'user_id' => 2,
            'work_id' => 1,
        ]);
    }
}
