<?php

use Illuminate\Database\Seeder;

class WorkImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_images')->insert([
            'id' => 1,
            'image' => 'work1.png',
            'work_id' => 1,
        ]);
        
        DB::table('work_images')->insert([
            'id' => 2,
            'image' => 'work2.png',
            'work_id' => 1,
        ]);
        
        DB::table('work_images')->insert([
            'id' => 3,
            'image' => 'work3.png',
            'work_id' => 2,
        ]);
        
        DB::table('work_images')->insert([
            'id' => 4,
            'image' => 'work4.png',
            'work_id' => 2,
        ]);
    }
}
