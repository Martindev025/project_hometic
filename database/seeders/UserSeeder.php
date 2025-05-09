<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name'=>'Dennis Ary Franco',
            'email'=>'franco@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('Administrador');

        User::factory(9)->create();
    }
}
