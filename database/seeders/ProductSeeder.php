<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Hydrating Facial Cleanser', 'description' => 'A gentle cleanser that removes dirt and hydrates.', 'price' => 12.99, 'image' => '/images/cleanser.jpg'],
            ['name' => 'Revitalizing Night Cream', 'description' => 'Rich night cream to regenerate skin overnight.', 'price' => 19.99, 'image' => '/images/night_cream.jpg'],
            ['name' => 'Anti-Acne Serum', 'description' => 'Helps reduce breakouts and clear skin.', 'price' => 29.99, 'image' => '/images/anti_acne_serum.jpg'],
            ['name' => 'Vitamin C Brightening Serum', 'description' => 'Boosts radiance and evens skin tone.', 'price' => 24.99, 'image' => '/images/vitamin_c_serum.jpg'],
            ['name' => 'Moisturizing Sunscreen SPF 50', 'description' => 'Lightweight sunscreen for all-day protection.', 'price' => 15.99, 'image' => '/images/sunscreen_spf50.jpg'],
            ['name' => 'Exfoliating Facial Scrub', 'description' => 'Removes dead skin cells for smoother skin.', 'price' => 14.99, 'image' => '/images/exfoliating_scrub.jpg'],
            ['name' => 'Hydrating Lip Balm', 'description' => 'Nourishes and hydrates dry lips.', 'price' => 5.99, 'image' => '/images/hydrating_lip_balm.jpg'],
            ['name' => 'Aloe Vera Soothing Gel', 'description' => 'Calms irritated and sensitive skin.', 'price' => 9.99, 'image' => '/images/aloe_vera_gel.jpg'],
            ['name' => 'Collagen Boosting Face Mask', 'description' => 'Hydrates and improves skin elasticity.', 'price' => 17.99, 'image' => '/images/face_mask.jpg'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
