<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('zh_TW');
       \App\Items::truncate();
        Items::create(['title'->'商品','price'->100,'enabled'->true,'emil'->'bbb@gdemo.com']);
    }
}
