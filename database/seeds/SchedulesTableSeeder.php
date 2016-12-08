<?php

use App\Models\Company;
use App\Models\Frequency;
use App\Models\Route;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = Company::pluck('id');
        $frequency = Frequency::where('display_name', 'Daily')->first();

        foreach ($companies as $datum) {
            foreach (Schedule::BUS_TYPE as $key => $type) {
                $originRoutes = Route::whereIn('id', [1, 2])->pluck('id')->toArray();
                $destinationRoutes = Route::whereNotIn('id', [1, 2])->pluck('id')->toArray();
                $origin = $originRoutes[array_rand($originRoutes, 1)];
                $destination = $destinationRoutes[array_rand($destinationRoutes, 1)];
                Schedule::create(array(
                    'company_id'     => $datum,
                    'bus_type'       => $type,
                    'frequency_id'   => $frequency->id,
                    'origin_id'      => $origin,
                    'destination_id' => $destination,
                    'departure'      => "14:00",
                    'fare'           => 450.00,
                    'seats'          => rand(45, 50),
                ));
            }
        }

    }
}
