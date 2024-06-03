<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Elit reprehenderit eu nostrud et.',
            'price' => 19.44,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'lorem asdfoak sfasdk fasfk adsfo adsfo adsfk asdkf ',

        ]);
    }
}
