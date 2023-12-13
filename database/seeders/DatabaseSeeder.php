<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class
        ]);
        // User::create([
        //     'email' => 'admin@bbms.com',
        //     'password' => Hash::make('123456'),
        //     'position' =>'Admin'
        // ]);
    }


}
