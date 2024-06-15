<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChartRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('chat_rooms')->insert([
           'name'=>'General'
       ]);
        DB::table('chat_rooms')->insert([
            'name'=>'Tech Talk'
        ]);
    }
}
