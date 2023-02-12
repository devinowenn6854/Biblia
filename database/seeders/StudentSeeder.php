<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nama' => 'Devin Owen',
            'kls' => '11 TKJ 1',
            'usia' => '16',
            'skill' => '9',
            'des' => 'aaa',
            'foto' => 'blm ada',
        ]);
    }
}
