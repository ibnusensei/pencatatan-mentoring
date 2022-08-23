<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => 'Web Developer',
                'division' => 'Digitaliz',
            ],
            [
                'name' => 'UI/UX Designer',
                'division' => 'Digitaliz',
            ],
            [
                'name' => 'Pre Service Teacher',
                'division' => 'Global Islamic Boarding School',
            ],
        ];

        foreach ($datas as $data) {
            Position::create($data);
        }
    }
}
