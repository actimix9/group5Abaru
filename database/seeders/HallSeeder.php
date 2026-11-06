<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    public function run(): void
    {
        $hall_seed = [
            [
                'lecture_hall_name' => 'Hall A',
                'lecture_hall_place' => 'Block A',
            ],
            [
                'lecture_hall_name' => 'Hall B',
                'lecture_hall_place' => 'Block B',
            ],
            [
                'lecture_hall_name' => 'Hall C',
                'lecture_hall_place' => 'Block C',
            ],
            [
                'lecture_hall_name' => 'Hall D',
                'lecture_hall_place' => 'Block D',
            ],
            [
                'lecture_hall_name' => 'Hall E',
                'lecture_hall_place' => 'Block E',
            ],
        ];

        foreach ($hall_seed as $hall) {
            Hall::firstOrCreate($hall);
        }
    }
}
