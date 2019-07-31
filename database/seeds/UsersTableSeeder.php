<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'user_type' => 'A',
            'email' => 'roben@evalogical.com',
            'password' => bcrypt('admin'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'jack',
            'user_type' => 'U',
            'email' => 'jack@aspire.com',
            'password' => bcrypt('jack'),
            'created_at' => now(),
        ]);
    }
}
