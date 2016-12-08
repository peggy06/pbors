<?php

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CompanyTableSeeder extends Seeder
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
                'name'      => 'Gasat',
                'logo_path' => Storage::putFile('public/company_logos', new UploadedFile(public_path("img/logo1.png"), "logo1.png"))
            ],
            [
                'name'      => 'JAM LINER',
                'logo_path' => Storage::putFile('public/company_logos', new UploadedFile(public_path("img/logo2.png"), "logo2.png"))
            ],
            [
                'name'      => 'Victory Liner',
                'logo_path' => Storage::putFile('public/company_logos', new UploadedFile(public_path("img/logo3.png"), "logo3.png"))
            ],
        ];

        foreach ($data as $datum) {
            Company::create($datum);
        }

    }
}
