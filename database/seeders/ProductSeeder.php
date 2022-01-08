<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(3)
            ->for(Category::factory()->create())
            ->has(ProductDetail::factory()->count(rand(2,5)),'product_details')
            ->create();
    }
}
