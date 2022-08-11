<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user_admin = DB::table('users')->where('email', '=', 'admin@example.com')->first();
        if(!$user_admin){
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
            ]);
        }

        DB::table('posts')->insert([
            'slug' => Str::slug('Lorem ipsum'),
            'title' => 'Lorem ipsum',
            'body' => Str::random(100),
            'published' => true,
            'published_at' => now(),
            'user_id' => 1,
            'created_at' => now(),
        ]);

        DB::table('posts')->insert([
            'slug' => Str::slug('Another example post'),
            'title' => 'Another example post',
            'body' => Str::random(50),
            'published' => true,
            'published_at' => now(),
            'user_id' => 1,
            'created_at' => now(),
        ]);
    }
}
