<?php

namespace Database\Seeders;

use App\Models\C_image;
use App\Models\Combo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $combos = Combo::factory(10)->create();
    }
}
