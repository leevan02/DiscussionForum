<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([

            'name' => 'admin',

            'email' => 'admin@admin.com',

            'password' => bcrypt('123456789'),

            'role' => 'admin',

        ]);

        User::factory()->count(2)->create();
    }
}
