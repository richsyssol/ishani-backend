<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    public function run()
    {
        $images = [
            [
                'src' => 'gallery/french-doors.jpg',
                'alt' => 'Modern French Doors Installation',
                'category' => 'French Doors',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'src' => 'gallery/luxury-aluminum-windows.jpg',
                'alt' => 'Luxury Aluminum Windows',
                'category' => 'Windows',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'src' => 'gallery/custom-glass-partitions.jpg',
                'alt' => 'Custom Glass Partitions',
                'category' => 'Partitions',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'src' => 'gallery/smart-safety-doors.jpg',
                'alt' => 'Smart Safety Doors',
                'category' => 'Security',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'src' => 'gallery/mosquito-net-solutions.jpg',
                'alt' => 'Mosquito Net Solutions',
                'category' => 'Nets',
                'is_active' => true,
                'sort_order' => 5,
            ]
            
        ];

        foreach ($images as $image) {
            GalleryImage::create($image);
        }
    }
}