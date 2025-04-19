<?php

namespace Database\Seeders;

use App\Models\FranchiseInfo;
use Illuminate\Database\Seeder;

class FranchiseInfoSeeder extends Seeder
{
    public function run(): void
    {
        if (FranchiseInfo::count() === 0) {
            FranchiseInfo::create([
                'benefits' => '<p>Default franchise benefits content...</p>',
                'support' => '<p>Default franchise support content...</p>',
                'cities_available' => ['New York', 'Los Angeles', 'Chicago'],
            ]);
        }
    }
}