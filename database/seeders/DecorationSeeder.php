<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DecorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('decorations')->insert([
            'name' => 'Украшение 1',
            'price' => 300,
            'img_url' => 'images/blue.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('decorations')->insert([
            'name' => 'Украшение 2',
            'price' => 300,
            'img_url' => 'images/fiolet.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('decorations')->insert([
            'name' => 'Украшение 3',
            'price' => 300,
            'img_url' => 'images/flowers.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('decorations')->insert([
            'name' => 'Украшение 4',
            'price' => 300,
            'img_url' => 'images/pers.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('decorations')->insert([
            'name' => 'Украшение 5',
            'price' => 300,
            'img_url' => 'images/pink.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('decorations')->insert([
            'name' => 'Украшение 6',
            'price' => 300,
            'img_url' => 'images/red.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
