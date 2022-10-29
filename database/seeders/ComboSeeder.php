<?php

namespace Database\Seeders;

use App\Models\Image;
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

       foreach($combos as $combo) 
        Image::factory(1)->create([
            'imageable_id' => $combo->id,
            'imageable_type' => Combo::class]);
    }
}
