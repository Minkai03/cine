<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Horario::create([
            'hora' => '13:30',
            'dias_id' => '2',
            'dias_id' => '3',
            'dias_id' => '4',
            'dias_id' => '5',
            'dias_id' => '6',
            'dias_id' => '7',

        ]);

        Horario::create([
            'hora' => '15:30',
            'dias_id' => '2',
            'dias_id' => '3',
            'dias_id' => '4',
            'dias_id' => '5',
            'dias_id' => '6',
            'dias_id' => '7',
        ]);

        Horario::create([
            'hora' => '17:30',
            'dias_id' => '2',
            'dias_id' => '3',
            'dias_id' => '4',
            'dias_id' => '5',
            'dias_id' => '6',
            'dias_id' => '7',
        ]);

        Horario::create([
            'hora' => '20:30',
            'dias_id' => '2',
            'dias_id' => '3',
            'dias_id' => '4',
            'dias_id' => '5',
            'dias_id' => '6',
            'dias_id' => '7',
        ]);

        Horario::create([
            'hora' => '22:30',
            'dias_id' => '2',
            'dias_id' => '3',
            'dias_id' => '4',
            'dias_id' => '5',
            'dias_id' => '6',
            'dias_id' => '7',
        ]);
    }
}
