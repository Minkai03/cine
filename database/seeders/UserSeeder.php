<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Milagros Cañete',
            'email' => 'cannette.milagros@gmail.com',
            'password' => bcrypt('12345678')
        ])->assingRole('Admin');

        User::factory(10)->create();
    }
}
