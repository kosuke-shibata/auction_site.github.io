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
          'title' => '架空温泉旅館のホームページ',
          'body' => 'うまくできました。',
          'price' => 0,
          'image_path' => 'https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/Onsen-hotel-site2.png',
          'user_id' => 1,
        ]);
        
        DB::table('works')->insert([
            'id' => 2,
            'title' => '架空コスメティックサイト',
            'body' => 'あくまでも偏見です。',
            'price' => 0,
            'image_path' => 'https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/cosmetic-site.png',
            'user_id' => 2,
        ]);
    }
}
