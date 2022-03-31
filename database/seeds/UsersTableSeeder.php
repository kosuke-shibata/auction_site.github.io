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
            'id' => 1,
            'name' => 'しばたこうすけ',
            'introduce' => '初めまして。よろしくお願いします。',
            'credit' => '123456789',
            'email' => 's.kosuke1517@gmail.com',
            'password' => '$2y$10$IAW6v6nxoaqG91IFck12i.UlLAQ2fTEPIS3C8OEr34ajrKtmxfw0K',
        ]);
        
        DB::table('users')->insert([
            'id' => 2,
            'name' => '山田太郎',
            'introduce' => '僕は山田太郎だ。男だ。22歳だ。',
            'credit' => '987654321',
            'email' => 'yamada1111@gmail.com',
            'password' => '$2y$10$khqFRbuIpa6gYCfAQ/ygDusN0.MhjiiVX.RIi4YPsWdr8XHNj4ZqC',
        ]);
    }
}
