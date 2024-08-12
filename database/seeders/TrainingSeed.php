<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = [
            ['name' => 'TNPSC'],
            ['name' => 'IBPS'],
            ['name' => 'TNEB'],
            ['name' => 'CLERK'],
            ['name' => 'RRB'],
        ];

        foreach ($trainings as $row) {
            Training::create($training);
        }
    }
}
