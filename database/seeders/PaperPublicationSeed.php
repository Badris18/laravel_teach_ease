<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Paperpublication;

class PaperPublicationSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paperpublications = [
            ['user_id' => '123'],
            ['user_id' => '456'],
            ['user_id' => '789'],
            ['user_id' => '101'],
            ['user_id' => '112'],
        ];

        foreach ($paperpublications as $row) {
            PaperPublication::create($row);
        }
    }
}
