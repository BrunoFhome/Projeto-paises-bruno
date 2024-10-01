<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CountryStateCitySeeder extends Seeder
{
    public function run()
    {
        $brazil = Country::create(['name' => 'Brasil']);
        $sp = State::create(['name' => 'São Paulo', 'country_id' => $brazil->id]);
        $rj = State::create(['name' => 'Rio de Janeiro', 'country_id' => $brazil->id]);

        City::create(['name' => 'Santos',
            'state_id' => $sp->id,
            'population' => 433656, // Exemplo de população
            'area' => 280.67 // Exemplo de área em km²]);
        ]);}
}


