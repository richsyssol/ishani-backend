<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $testimonials = [
            [
                'name' => 'Rajesh Mehta',
                'project' => 'Villa French Doors',
                'quote' => 'Ishani\'s doors transformed our home\'s aesthetic completely!',
                'image' => 'testimonials/client1.jpg',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Priya Sharma',
                'project' => 'Office Partitions',
                'quote' => 'Professional installation with excellent after-sales service.',
                'image' => 'testimonials/priya-sharma.jpg',
                'rating' => 4,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Amit Patel',
                'project' => 'Apartment Windows',
                'quote' => 'Energy efficient windows that reduced our AC bills significantly.',
                'image' => 'testimonials/amit-patel.jpg',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Neha Gupta',
                'project' => 'Safety Doors',
                'quote' => 'The biometric lock gives us complete peace of mind.',
                'image' => 'testimonials/neha-gupta.jpg',
                'rating' => 5,
                'is_featured' => false,
                'sort_order' => 4,
            ],
            [
                'name' => 'Vikram Singh',
                'project' => 'Mosquito Nets',
                'quote' => 'Discreet design that doesn\'t compromise on functionality.',
                'image' => 'testimonials/vikram-singh.jpg',
                'rating' => 4,
                'is_featured' => false,
                'sort_order' => 5,
            ],
            [
                'name' => 'Ananya Reddy',
                'project' => 'Custom Glass Work',
                'quote' => 'Exactly matched our architect\'s unique vision.',
                'image' => 'testimonials/ananya-reddy.jpg',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 6,
            ],
            // Add all other testimonials from your array
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}