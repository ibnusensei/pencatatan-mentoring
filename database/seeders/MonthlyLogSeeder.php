<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\MonthlyLog;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MonthlyLogSeeder extends Seeder
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
            'month' => now()->format('Y-m-1'),
            'activity' => $faker->sentence(20),
            'description' => $faker->realText(200),
            'hour' => 80,
        ];

        MonthlyLog::updateOrCreate(
            ['mentor_id' => $mentor->id, 'month' => now()->format('Y-m-1')],
            $data
        );
    }
}
