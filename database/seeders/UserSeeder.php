<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'full_name' => 'Hugo First',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Percy Vere',
                'age' => 35,
                'gender' => 'Female',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Jack Aranda',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Olive Tree',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Fran G. Pani',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'John Quil',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Anne Thurium',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Cherry Blossom',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Colin Sik',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
            [
                'full_name' => 'Greg Arias',
                'age' => 25,
                'gender' => 'Male',
                'job_title' => '',
                'job_id' => 0,
            ],
        ];
    
        User::insert($users);
    }
}
