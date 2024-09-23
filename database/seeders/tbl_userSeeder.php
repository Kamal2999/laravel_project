<?php

namespace Database\Seeders;

use App\Models\tbl_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10 ; $i++) { 
            tbl_user::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'city' => fake()->city(),
                'phone' => fake()->phoneNumber(),
            ]);
}

    }
}
