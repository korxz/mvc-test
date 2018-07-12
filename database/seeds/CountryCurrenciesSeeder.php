<?php

use Illuminate\Database\Seeder;

class CountryCurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_currencies')->insert([
            'iso_code' => 'AL',
            'country' => 'Albania',
            'currency' => 'Lek'
        ]);

        DB::table('country_currencies')->insert([
            'iso_code' => 'AT',
            'country' => 'Austria',
            'currency' => 'Euro'
        ]);

        DB::table('country_currencies')->insert([
            'iso_code' => 'BY',
            'country' => 'Belarus',
            'currency' => 'Belarusian ruble'
        ]);

        DB::table('country_currencies')->insert([
            'iso_code' => 'BR',
            'country' => 'Brazil',
            'currency' => 'Real'
        ]);

        DB::table('country_currencies')->insert([
            'iso_code' => 'MA',
            'country' => 'Morocco',
            'currency' => '	Moroccan dirham'
        ]);

        DB::table('country_currencies')->insert([
            'iso_code' => 'SI',
            'country' => 'Slovenia',
            'currency' => 'Euro'
        ]);
    }
}
