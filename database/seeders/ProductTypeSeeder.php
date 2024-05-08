<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = now();

        // Seed types for category id 1 (Consumer)
        $consumerTypes = [
            'LED Bulbs',
            'LED Downlights',
            'LED Slim Panel Lights',
            'LED Adjustable Panel Lights',
            'LED Surface Panel',
            'LED COB',
            'LED Batten Light',
            'LED Tube Light'
        ];

        foreach ($consumerTypes as $type) {
            ProductType::updateOrCreate(
                ['type_name' => $type],
                ['product_category_id' => 1, 'created_at' => $now, 'updated_at' => $now]
            );
        }

        // Seed types for category id 2 (Professional)
        $professionalTypes = [
            'LED Street Lights',
            'LED Flood Lights',
            'LED Highbay Lights',
            'LED Panel Lights',
            'LED T Series Bulbs',
            'LED Spot Lights',
            'LED Tube Lights',
            'LED Stadium Lights',
            'LED Solar Street Lights',
            'LED Smart Lighting'
        ];

        foreach ($professionalTypes as $type) {
            ProductType::updateOrCreate(
                ['type_name' => $type],
                ['product_category_id' => 2, 'created_at' => $now, 'updated_at' => $now]
            );
        }
    }
}
