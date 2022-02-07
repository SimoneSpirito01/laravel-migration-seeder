<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pack;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 80; $i++) {
            $pack = new Pack();
            $pack->title = $faker->text(15);
            $pack->address = $faker->address();
            $pack->city = $faker->city();
            $pack->country = $faker->country();
            $pack->postal_code = $faker->postcode();
            $pack->description = $faker->text(300);
            $pack->person = $faker->randomDigit();
            $pack->nights = $faker->numberBetween(1, 30);
            $pack->validity_time = $faker->numberBetween(1, 50);
            $pack->price = $faker->randomFloat(2, 10, 10000);
            $pack->save();
        }
        
    }
}
