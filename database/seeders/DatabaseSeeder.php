<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Client;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // teszteléshez

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' =>  bcrypt('password')
        // ]);

        // \App\Models\Client::factory(3)->create(); // ezt kell futtani, ha seedelni akarunk többféle klienst
        Client::create([
            'name'=>'John Doe',
            'email'=>'john.doe@pelda.hu',
            'phone'=>'123-456-7890',
            'avatar'=>'c1.png'
        ]);
        Client::create([
            'name'=>'Jane Smith',
            'phone'=>'555-123-4567',
            'email'=>'jane.smith@pelda.hu',
            'avatar'=>'c2.png'
        ]);
        Client::create([
            'name'=>'Bob Johnson',
            'phone'=>'987-654-3210',
            'email'=>'bob.johnson@pelda.hu',
            'avatar'=>'c3.png'
        ]);
    }
}
