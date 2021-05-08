<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name' => 'gratis',
            'value' => 0
        ]);

        Price::create([
            'name' => '19.99 US$ (nivel 1)',
            'value' => 19.99
        ]);

        Price::create([
            'name' => '49.99 US$ (nivel 1)',
            'value' => 49.99
        ]);

        Price::create([
            'name' => '99.99 US$ (nivel1)',
            'value' => 99.99
        ]);
    }
}
