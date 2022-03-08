<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 2,
            'name' => '柴田光祐',
            'introduce' => '初めまして。よろしくお願いします。',
            'credit' => '123456789',
            'email' => 'sittake1517@gmail.com',
            'password' => 'abcdefghij',
        ]);
        
        DB::table('users')->insert([
            'id' => 3,
            'name' => '山田太郎',
            'introduce' => '僕は山田太郎だ。男だ。22歳だ。',
            'credit' => '987654321',
            'email' => 'yamada1111@gmail.com',
            'password' => 'klmnopqrstu',
        ]);
    }
}
