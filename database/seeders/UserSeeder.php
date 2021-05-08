<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raul Esteban Benitez Enciso',
            'email' => 'estebanbenitez1996@gmail.com',
            'password' => bcrypt('Password4444.,')
        ]);
        

        User::factory(99)->create();
    }
}
