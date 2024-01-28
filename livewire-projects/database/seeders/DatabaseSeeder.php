<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Country;
use App\Models\Products;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $continents = [
            ['id' => 1, 'name' => 'Europe'],
            ['id' => 2, 'name' => 'Asia'],
            ['id' => 3, 'name' => 'Africa'],
            ['id' => 4, 'name' => 'South America'],
            ['id' => 5, 'name' => 'North America'],
        ];

        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
                ->each(function ($c){
                    $c->countries()->saveMany(Country::factory(10)->make());
                });
        }

        Products::factory(100)->create();
    }
}
