<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            // 'id' => 1,
            // 'user_id' => 1,
            // 'work_id' => 2,
        ]);
    }
}
