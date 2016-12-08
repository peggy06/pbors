<?php

use App\Models\Frequency;
use Illuminate\Database\Seeder;

class FrequenciesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'display_name' => 'Mondays',
            ],
            [
                'display_name' => 'Tuesdays',
            ],
            [
                'display_name' => 'Wednesdays',
            ],
            [
                'display_name' => 'Thursdays',
            ],
            [
                'display_name' => 'Fridays',
            ],
            [
                'display_name' => 'Saturdays',
            ],
            [
                'display_name' => 'Sundays',
            ],
            [
                'display_name' => 'Daily',
            ],
            /*[
                'display_name' => 'Weekends',
            ],*/
        ];

        foreach ($data as $datum) {
            Frequency::create($datum);
        }

    }
}
