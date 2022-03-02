<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'id' => 1,
           'title' => '架空スクールのホームページ',
           'body' => 'うまくできました。',
           'price' => 0,
           'user_id' => 1,
        ]);
        
        DB::table('works')->insert([
            'id' => 2,
            'title' => 'プログラミングスクールでありそうなバナー',
            'body' => 'あくまでも偏見です。',
            'price' => 0,
            'user_id' => 2,
        ]);
    }
}
