<?php

namespace Database\Seeders;

use App\Models\tbl_student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class tbl_studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10 ; $i++) { 
            tbl_student::create([
                'name' => fake()->name(),
                'city' => fake()->city(),
            ]);

    }
}
}
