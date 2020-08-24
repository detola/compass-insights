<?php

use App\ProductCategory;
use App\Http\Controllers\CategoryController;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        ProductCategory::insert([
            'name' => 'General Product','slug' => 'general-product','created_at' => $now,'updated_at' => $now,
            'name' => 'Customer Engagement Booster','slug' => 'customer-engagement-booster','created_at' => $now,'updated_at' => $now
        ]);
    }
}
