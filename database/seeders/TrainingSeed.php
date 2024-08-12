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
            ['heading' => 'TNPSC'],
            ['heading' => 'IBPS'],
            ['heading' => 'TNEB'],
            ['heading' => 'CLERK'],
            ['heading' => 'RRB'],
        ];

        foreach ($trainings as $row) {
            Training::create($row);
        }
    }
}
