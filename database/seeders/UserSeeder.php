<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\People;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Get some people IDs to assign users
        $peopleRecords = People::all();

        foreach ($peopleRecords as $person) {
            User::create([
                'nic' => $person->nic,               // use NIC from people table
                'people_id' => $person->people_id,  // foreign key
                'name' => $person->full_name,       // optional: same as full name
                'email' => strtolower(Str::slug($person->full_name)) . '@example.com',
                'contact' => '07' . str_pad(rand(1000000, 9999999), 7, '0', STR_PAD_LEFT),
                'password' => Hash::make('password123'),
                'profile_picture' => 'default.png',
                'remember_token' => Str::random(10),
                'active_status'  => '1',
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]);
        }

        // Optional: create an admin user
        // User::create([
        //     'nic' => 'ADMIN000001',
        //     'people_id' => $peopleIds[0] ?? null,
        //     'name' => 'Admin User',
        //     'email' => 'admin@example.com',
        //     'contact' => '0712345678',
        //     'password' => Hash::make('admin123'),
        //     'profile_picture' => null,
        //     'remember_token' => Str::random(10),
        // ]);
    }
}
