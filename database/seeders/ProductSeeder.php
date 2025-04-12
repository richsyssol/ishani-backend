<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                
                'category' => 'uPVC French Doors',
                'title' => 'Classic White uPVC Door',
                'description' => 'Energy-efficient with multi-point locking',
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=500&auto=format&fit=crop&q=80',
                'price' => '₹12,500',
            ],
            [
                
                'category' => 'uPVC French Doors',
                'title' => 'Woodgrain uPVC Door',
                'description' => 'Natural wood finish with thermal break',
                'image' => 'https://images.unsplash.com/photo-1600566752355-35792bedcfe3?w=500&auto=format&fit=crop&q=80',
                'price' => '₹14,200',
            ],
            [
                
                'category' => 'Aluminum French Doors',
                'title' => 'Slimline Aluminum Door',
                'description' => 'Narrow profiles with tempered glass',
                'image' => 'https://images.unsplash.com/photo-1600607688969-a5bfcd646154?w=500&auto=format&fit=crop&q=80',
                'price' => '₹18,750',
            ],
            [
                
                'category' => 'Sliding & Folding Doors',
                'title' => 'Bi-Fold Patio Door',
                'description' => 'Space-saving folding mechanism',
                'image' => 'https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=500&auto=format&fit=crop&q=80',
                'price' => '₹22,000',
            ],
            [
                
                'category' => 'Custom Design Options',
                'title' => 'Laser-Cut Floral Door',
                'description' => 'Bespoke patterns in aluminum',
                'image' => 'https://images.unsplash.com/photo-1565538810643-b5bdb714032a?w=500&auto=format&fit=crop&q=80',
                'price' => '₹28,500',
            ],
            [
                
                'category' => 'Smart Safety Doors',
                'title' => 'Biometric Security Door',
                'description' => 'Fingerprint + PIN access',
                'image' => 'https://images.unsplash.com/photo-1601760561441-1642052c7eed?w=500&auto=format&fit=crop&q=80',
                'price' => '₹35,000',
            ],
            [
                
                'category' => 'French Windows',
                'title' => 'Floor-to-Ceiling Window',
                'description' => 'Panoramic views with uPVC frames',
                'image' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=500&auto=format&fit=crop&q=80',
                'price' => '₹9,800/sq.ft',
            ],
            [
                
                'category' => 'Partitions',
                'title' => 'Laser-Cut Metal Partition',
                'description' => 'Custom geometric designs',
                'image' => 'https://images.unsplash.com/photo-1586023492125-27a5d5a5a4d4?w=500&auto=format&fit=crop&q=80',
                'price' => '₹6,500/panel',
            ],
            [
                
                'category' => 'Mosquito Nets',
                'title' => 'Stainless Steel Roll-Up Net',
                'description' => 'Durable rust-proof mesh',
                'image' => 'https://images.unsplash.com/photo-1631217877853-1a068196e613?w=500&auto=format&fit=crop&q=80',
                'price' => '₹3,200',
            ],
            [
                
                'category' => 'Invisible Grills',
                'title' => 'SS304 Tension Grill',
                'description' => 'High-security with clear view',
                'image' => 'https://images.unsplash.com/photo-1600566752355-35792bedcfe3?w=500&auto=format&fit=crop&q=80',
                'price' => '₹4,800/meter',
            ],
            [
                
                'category' => 'uPVC French Doors',
                'title' => 'Black uPVC French Door',
                'description' => 'Modern matte black finish',
                'image' => 'https://images.unsplash.com/photo-1600607688270-b8124e1cf4d5?w=500&auto=format&fit=crop&q=80',
                'price' => '₹15,750',
            ],
        ];
        

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}