<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        $group_seed = [
            ['name' => 'Group A', 'part' => '5'],
            ['name' => 'Group B', 'part' => '5'],
            ['name' => 'Group C', 'part' => '5'],
            ['name' => 'Group D', 'part' => '5'],
            ['name' => 'Group E', 'part' => '5'],
        ];

        foreach ($group_seed as $group) {
            Group::firstOrCreate($group);
        }
    }
}
