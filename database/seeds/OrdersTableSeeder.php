<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            // 'id' => 1,
            // 'user_id' => 1,
            // 'work_id' => 2,
        ]);
    }
}
