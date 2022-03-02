<?php

use Illuminate\Database\Seeder;

class WorkFilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_files')->insert([
            'id' => 1,
            'file' => 'work1.txt',
            'work_id' => 1,
        ]);
        
        DB::table('work_files')->insert([
            'id' => 2,
            'file' => 'work2.txt',
            'work_id' => 1,
        ]);
        
        DB::table('work_files')->insert([
            'id' => 3,
            'file' => 'work3.txt',
            'work_id' => 2,
        ]);
        
        DB::table('work_files')->insert([
            'id' => 4,
            'file' => 'work4.txt',
            'work_id' => 2,
        ]);
    }
}
