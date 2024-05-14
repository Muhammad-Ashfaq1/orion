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

        $consumerImages = [
            'led_bulb.jpeg',
            'Down_light.jpeg',
            'panel_light.jpeg',
            'adjustable_panel.jpeg',
            'surface.jpeg',
            'COB.jpeg',
            'baten.jpeg',
            'tube.jpeg',
            ];

        foreach ($consumerTypes as $index => $type) {
            ProductType::updateOrCreate(
                ['type_name' => $type],
                [
                    'product_category_id' => 1,
                    'image_url' => $consumerImages[$index],
                    'created_at' => $now,
                    'updated_at' => $now
                ]
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

        $professionalImages = [
            'street_light.jpeg',
            'flood.jpeg',
            'highbay.jpeg',
            'led_panel.jpeg',
            't-shape.jpeg',
            'spot_light.jpeg',
            'tube_light.jpeg',
            'stadium_light.jpeg',
            'solar_light.jpeg',
            'smart.jpeg',
        ];

        foreach ($professionalTypes as $index => $type) {
            ProductType::updateOrCreate(
                ['type_name' => $type],
                [
                    'product_category_id' => 2,
                    'image_url' => $professionalImages[$index],
                    'created_at' => $now,
                    'updated_at' => $now
                ]
            );
        }
    }
}
