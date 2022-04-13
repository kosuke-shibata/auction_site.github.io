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
          'file_path' => 'https://github.com/kosuke-shibata/Onsen-hotel-site.github.io',
          'user_id' => 1,
        ]);
        
        DB::table('works')->insert([
            'id' => 2,
            'title' => '架空コスメティックサイト',
            'body' => 'あくまでも偏見です。',
            'price' => 0,
            'image_path' => 'https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/cosmetic-site.png',
            'file_path' => 'https://github.com/kosuke-shibata/cosmetic-site.github.io',
            'user_id' => 2,
        ]);
        
        DB::table('works')->insert([
            'id' => 3,
            'title' => '初めてのサイト',
            'body' => 'あまりうまくできませんでした。',
            'price' => 0,
            'image_path' => 'https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/fishing-web.png',
            'file_path' => 'https://github.com/kosuke-shibata/fishing-site.github.io',
            'user_id' => 2,
        ]);
        
        DB::table('works')->insert([
            'id' => 4,
            'title' => '架空フィッシングスクールのサイト',
            'body' => 'ありそうなものができました。',
            'price' => 0,
            'image_path' => 'https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/fishing-school.png',
            'file_path' => 'https://github.com/kosuke-shibata/fishing-school-site.github.io',
            'user_id' => 2,
        ]);
    }
}
