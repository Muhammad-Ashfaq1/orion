<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\ProductType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        $product_categories = [
            ['id' => 1, 'category_name' => 'Consumer', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'category_name' => 'Professional', 'created_at' => $now, 'updated_at' => $now],
        ];

        foreach ($product_categories as $product_cat) {
            ProductCategory::updateOrCreate(
                ['id' => $product_cat['id']],
                $product_cat
            );
        }
    }
}
