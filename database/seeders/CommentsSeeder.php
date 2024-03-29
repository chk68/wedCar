<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('comments')->insert([
            'name' => 'Denis',
            'comment' => 'Awesome',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'name' => 'Yulia',
            'comment' => 'Wow!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'name' => 'Stas',
            'comment' => 'ya ne stas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'name' => 'Maxon',
            'comment' => 'O daaaa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'name' => 'Jeka',
            'comment' => 'My name is Jeka',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
