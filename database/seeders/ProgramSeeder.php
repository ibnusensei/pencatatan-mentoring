<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Program Test',
            'description' => 'Program Test Description',
            'start_date' => '2022-08-01',
            'end_date' => '2022-11-30',
        ];

        Program::create($data);
    }
}
