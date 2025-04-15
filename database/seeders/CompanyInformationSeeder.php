<?php

namespace Database\Seeders;

use App\Models\CompanyInformation;
use Illuminate\Database\Seeder;

class CompanyInformationSeeder extends Seeder
{
    public function run()
    {
        if (CompanyInformation::count() === 0) {
            CompanyInformation::create([
                'company_overview' => 'Default company overview text...',
                'manufacturing_facility_description' => 'Default manufacturing description...',
                'leadership_team' => [],
            ]);
        }
    }
}