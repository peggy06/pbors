<?php

use App\Models\Route;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Cubao, Manila', 'location' => 'Cubao', 'region' => 'Manila'],
            ['name' => 'Pasay, Manila', 'location' => 'Pasay', 'region' => 'Manila'],
            ['name' => 'Alaminos, Pangasinan', 'location' => 'Alaminos', 'region' => 'Pangasinan'],
            ['name' => 'Candelaria, Zambales', 'location' => 'Candelaria', 'region' => 'Zambales'],

        ];

        foreach ($data as $datum) {
            Route::create($datum);
        }
    }
}
