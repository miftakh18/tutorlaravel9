<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Miftah', 'score' => 80],
            ['id' => 2, 'name' => 'Aldan', 'score' => 85],
            ['id' => 3, 'name' => 'Lisan', 'score' => 70],
            ['id' => 4, 'name' => 'ojan', 'score' => 90]
        ];
        DB::table('students')->insert($data);
    }
}
