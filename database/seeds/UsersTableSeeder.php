<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('hello123'),
            ],
        ];

        foreach ($data as $datum) {
            User::create($datum);
        }
    }
}
