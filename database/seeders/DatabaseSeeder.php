<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
           'name' => 'Test User',
             'email' => 'test@example.com',
             'password'=> bcrypt('12345678'),
             'tipo_usuario' => '1'
         ]);

         \App\Models\User::factory()->create([
          'name' => 'Cliente',
            'email' => 'Cliente@example.com',
            'password'=> bcrypt('12345678'),
        ]);
    }
}
