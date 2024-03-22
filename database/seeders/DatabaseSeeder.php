<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 9; $i++) {
            DB::table('groups')->insert([
                'name' => "Groupe $i"
            ]);

            for ($j = 1; $j <= 9; $j++) {
                DB::table('users')->insert([
                    'name' => "Users{$j}Groupe{$i}",
                    'email' => "Users{$j}Groupe{$i}@local.dev",
                    'password' => bcrypt('0000'),
                    'group_id' => $i
                ]);
            }
        }
    }
}
