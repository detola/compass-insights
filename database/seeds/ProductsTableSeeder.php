<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name'=>'Booster 1',
            'slug'=>'Booster-1',
            'details'=>'Customer Engagement Boosters helps you boosts customer engagement',
            'price'=>10000,
            'discount'=>0,
            'description'=>'Customer-Engagement-Boosters',
            'category_id'=>1,
            'product_of_the_month'=>0
        ]);

        Product::create([
            'name'=>'Booster 2',
            'slug'=>'Booster-2',
            'details'=>'Customer Engagement Boosters helps you boosts customer engagement',
            'price'=>10000,
            'discount'=>0,
            'description'=>'Customer-Engagement-Boosters',
            'category_id'=>1,
            'product_of_the_month'=>0
        ]);

        Product::create([
            'name'=>'Booster 3',
            'slug'=>'Booster-3',
            'details'=>'Customer Engagement Boosters helps you boosts customer engagement',
            'price'=>10000,
            'discount'=>0,
            'description'=>'Customer-Engagement-Boosters',
            'category_id'=>1,
            'product_of_the_month'=>0
        ]);

        Product::create([
            'name'=>'Booster 4',
            'slug'=>'',
            'details'=>'Customer Engagement Boosters helps you boosts customer engagement',
            'price'=>10000,
            'discount'=>0,
            'description'=>'Customer-Engagement-Boosters',
            'category_id'=>1,
            'product_of_the_month'=>0
        ]);

        Product::create([
            'name'=>'Combined booster',
            'slug'=>'Combined-booster',
            'details'=>'Customer Engagement Boosters helps you boosts customer engagement',
            'price'=>25000,
            'discount'=>37,
            'description'=>'Customer-Engagement-Boosters',
            'category_id'=>1,
            'product_of_the_month'=>0
        ]);
    }
}
