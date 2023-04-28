<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
            ['nombre'=>'Colo Colo','entrenador'=>'Gustavo Quinteros','created_at'=>Carbon::now()],
            ['nombre'=>'Universidad Catolica','entrenador'=>'Cristian','created_at'=>Carbon::now()],
            ['nombre'=>'Universidad de Chile','entrenador'=>'Nicolas Calderon','created_at'=>Carbon::now()],
            ['nombre'=>'Nico FC ','entrenador'=>'Xavi Hernandez','created_at'=>Carbon::now()],
            ['nombre'=>'Maite FC','entrenador'=>'Carlos Ancelotti','created_at'=>Carbon::now()],
            ['nombre'=>'Real Madrid','entrenador'=>'Nelson Acosta','created_at'=>Carbon::now()],
        ]);
    }
}
