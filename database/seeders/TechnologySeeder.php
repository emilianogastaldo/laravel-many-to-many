<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creo l'array delle tecnologie su cui creero le istanze(tuple) per riempire la tabella
        $techs = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'ES6', 'color' => 'secondary'],
            ['label' => 'CSS', 'color' => 'success'],
            ['label' => 'Bootstrap', 'color' => 'primary'],
            ['label' => 'Vue', 'color' => 'warning'],
            ['label' => 'PHP', 'color' => 'info'],
            ['label' => 'SQL', 'color' => 'black'],
            ['label' => 'Laravel', 'color' => 'dark']
        ];
        foreach ($techs as $tech) {
            $new_tech = new Technology();
            $new_tech->label = $tech['label'];
            $new_tech->color = $tech['color'];
            $new_tech->save();
        }
    }
}