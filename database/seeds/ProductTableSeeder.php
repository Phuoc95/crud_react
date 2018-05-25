<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        
        $faker = Faker\Factory::create();
        
        for($i = 0; $i <5; $i++){
            DB::table('products')->insert([
                'title'=>$faker->name,
                'body'=>$faker->text
            ]);

        }
    }
}
