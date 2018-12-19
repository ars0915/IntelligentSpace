<?php

use App\Facility_A;
use App\Facility_B;
use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility_A::truncate();
        Facility_B::truncate();

        $faker = Faker\Factory::create();


        for($i = 0; $i < 20; $i++){
            Facility_A::create(['queuer' => $faker->userName]);
            Facility_B::create(['queuer' => $faker->userName]);
        }


    }
}
