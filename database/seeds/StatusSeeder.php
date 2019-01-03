<?php

use App\UserandShopStatus;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserandShopStatus::truncate();

        $faker = Faker\Factory::create();
        $ShopA = 'aaa';
        $ShopB = 'bbb';

        for ($i = 0; $i < 10; $i++){
            UserandShopStatus::create([
                'UserID' => $faker->userName,
                'ShopID' => $ShopA,
            ]);
            UserandShopStatus::create([
                'UserID' => $faker->userName,
                'ShopID' => $ShopB,
            ]);
        }

    }
}
