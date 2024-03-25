<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        $productTypes = [
            ['type_name' => 'Downlight', 'created_at' => $now, 'updated_at' => $now],
            ['type_name' => 'Floodlight', 'created_at' => $now, 'updated_at' => $now],
            ['type_name' => 'Panel Light', 'created_at' => $now, 'updated_at' => $now],
            ['type_name' => 'Ice Downlight', 'created_at' => $now, 'updated_at' => $now],
        ];

        foreach ($productTypes as $productType) {
            ProductType::updateOrCreate(
                ['type_name' => $productType['type_name']],
                $productType
            );
        }
    }
}
