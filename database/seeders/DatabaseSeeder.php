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
            'avatar'=>'c1.png'
        ]);
        Client::create([
            'name'=>'Jane Smith',
            'email'=>'jane.smith@pelda.hu',
            'avatar'=>'c2.png'
        ]);
        Client::create([
            'name'=>'Bob Johnson',
            'email'=>'bob.johnson@pelda.hu',
            'avatar'=>'c3.png'
        ]);
    }
}
