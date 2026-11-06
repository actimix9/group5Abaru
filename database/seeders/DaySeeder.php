<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Day;

class DaySeeder extends Seeder
{
    public function run(): void
    {
        $day_seed = [
            ['day_name' => 'Monday'],
            ['day_name' => 'Tuesday'],
            ['day_name' => 'Wednesday'],
            ['day_name' => 'Thursday'],
            ['day_name' => 'Friday'],
            ['day_name' => 'Saturday'],
            ['day_name' => 'Sunday'],
        ];

        foreach ($day_seed as $day) {
            Day::firstOrCreate($day);
        }
    }
}
