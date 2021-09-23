<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'title' => 'Frontend developer',
            ],
            [
                'title' => 'Backend developer',
            ],
            [
                'title' => 'QA specialist',
            ]
        ];

        Job::insert($jobs);
    }
}
