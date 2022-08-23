<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\Position;
use App\Models\Program;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = Program::first();

        for ($i=0; $i < 2; $i++) { 
            $user = User::role('user')->inRandomOrder()->first();
            $position = Position::inRandomOrder()->first();
            $mentor = Mentor::create([
                'user_id' => $user->id,
                'position_id' => $position->id,
                'program_id' => $program->id,
            ]);
        }
    }
}
