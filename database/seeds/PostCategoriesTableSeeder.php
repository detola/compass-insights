<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::create([
            'name'=>'Customer engagement',
            'slug'=>'customer-engagement',
            'created_at'=>$now,
            'updated_at'=>$now
        ]);

        Category::create([
            'name'=>'Customer management',
            'slug'=>'customer-management',
            'created_at'=>$now,
            'updated_at'=>$now
        ]);
    }
}
