<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subject_seed = [
            [
                'subject_code' => 'SUB101',
                'subject_name' => 'Programming Fundamentals',
                'lecturer_name' => 'Lecturer A',
            ],
            [
                'subject_code' => 'SUB102',
                'subject_name' => 'Database Management',
                'lecturer_name' => 'Lecturer B',
            ],
            [
                'subject_code' => 'SUB103',
                'subject_name' => 'Computer Networking',
                'lecturer_name' => 'Lecturer C',
            ],
            [
                'subject_code' => 'SUB104',
                'subject_name' => 'Web Development',
                'lecturer_name' => 'Lecturer D',
            ],
            [
                'subject_code' => 'SUB105',
                'subject_name' => 'Information Security',
                'lecturer_name' => 'Lecturer E',
            ],
        ];

        foreach ($subject_seed as $subject) {
            Subject::firstOrCreate($subject);
        }
    }
}
