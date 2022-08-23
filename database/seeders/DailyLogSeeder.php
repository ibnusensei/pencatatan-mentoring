<?php

namespace Database\Seeders;

use App\Models\DailyLog;
use App\Models\Mentor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DailyLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentor = Mentor::inRandomOrder()->first();
        $faker = Factory::create();
        $data = [
            'mentor_id' => $mentor->id,
            'date' => now()->format('Y-m-d'),
            'activity' => $faker->sentence(5),
            'description' => $faker->realText(100),
            'hour' => 1,
        ];

        // $mentor->daily_logs()->create($data);
        DailyLog::updateOrCreate(
            ['mentor_id' => $mentor->id, 'date' => now()->format('Y-m-d')],
            $data
        );
    }
}
