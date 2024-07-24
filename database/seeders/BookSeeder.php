<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => $faker->text(12),
                'thumbnail' => 'https://images.app.goo.gl/6XdrtD7TbkodwQBQ9',
                'author' => $faker->name,
                'publisher' => $faker->company,
                'publication' => $faker->date,
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'category_id' => rand(1, 2),
            ]);
        }
    }
}
