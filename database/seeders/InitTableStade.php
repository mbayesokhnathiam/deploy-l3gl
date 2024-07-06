<?php

namespace Database\Seeders;

use App\Models\Stade;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InitTableStade extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stade = new Stade();
        $stade->generateUniqueReference('FOOT');
        $stade->nom_stade = 'Stade Alboury NDIAYE';
        $stade->adresse = 'Point E';
        $stade->nb_place = 100;
        $stade->save();
    }
}
