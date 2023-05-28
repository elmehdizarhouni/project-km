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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name'=>'User1',
            'email'=>'user1@email.com',
            'password'=>bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name'=>'User2',
            'email'=>'user2@email.com',
            'password'=>bcrypt('password'),
        ]);


    }
}
