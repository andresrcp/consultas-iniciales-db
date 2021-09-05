<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 200; $i++){
            User::create([
                'names' => $faker->name,
                'lastnames' => $faker->lastName,
                'email' => $faker->email
            ]);
        }
    }
}
