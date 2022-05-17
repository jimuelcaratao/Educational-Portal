<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 0 = Normal Acc
        User::firstOrCreate([
            'name' => 'John Doe',
            'email' => 'bsoa1a@gmail.com',
            'is_admin' => 0,
            'section' => 'A',
            'year' => '1',
            'course' => 'BSOA',
            'password' => Hash::make('qweqweqwe'),
        ]);

        User::firstOrCreate([
            'name' => 'Rick Sanchez',
            'email' => 'bsoa2a@gmail.com',
            'is_admin' => 0,
            'section' => 'A',
            'year' => '2',
            'course' => 'BSOA',
            'password' => Hash::make('qweqweqwe'),
        ]);
        User::firstOrCreate([
            'name' => 'Patrick Star',
            'email' => 'bsoa3a@gmail.com',
            'is_admin' => 0,
            'section' => 'A',
            'year' => '3',
            'course' => 'BSOA',
            'password' => Hash::make('qweqweqwe'),
        ]);
        User::firstOrCreate([
            'name' => 'Bart Simpson',
            'email' => 'bsoa4a@gmail.com',
            'is_admin' => 0,
            'section' => 'A',
            'year' => '4',
            'course' => 'BSOA',
            'password' => Hash::make('qweqweqwe'),
        ]);

        // 1 = admin Acc

        User::firstOrCreate([
            'name' => 'Admin One',
            'email' => 'admin1@gmail.com',
            'is_admin' => 1,
            'password' => Hash::make('qweqweqwe'),
        ]);
    }
}
