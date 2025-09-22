<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure the role exists
        $superAdminRole = Role::firstOrCreate(['name' => 'super admin']);

        // Create a specific People record (if not already exists)
        DB::table('people')->updateOrInsert(
            ['nic' => '999999999V'], // unique NIC
            [
                'people_id'      => 'PE' . date('y') . '0001',
                'title_id'       => 'TIT01',
                'full_name'      => 'System Super Admin',
                'gender'         => '1',
                'date_of_birth'  => '1990-01-01',
                'religion_id'    => 'REL01',
                'ethnicity_id'   => 'ETH01',
                'civil_status_id'=> 'CS01',
                'health_condition'=> '0',
                'blood_group_id' => 'BG01',
                'email'          => 'superadmin@example.com',
                'phone'          => '0712345678',
                'district_id'    => 'DIS001',
                'gn_division_id' => 'GND00001',
                'address_line1'  => 'Main Office',
                'address_line2'  => 'Colombo',
                'address_line3'  => 'Sri Lanka',
                'postal_code'    => '00100',
                'profile_picture'=> 'default.png',
                'active_status'  => '1',
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]
        );

        // Create User linked to People
        $user = User::updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'nic' => '999999999V',
                'people_id' => 'PE' . date('y') . '0001',
                'name' => 'System Super Admin',
                'contact' => '0712345678',
                'password' => Hash::make('password'), // default password
                'active_status' => '1',
            ]
        );

        // Assign Super Admin role
        $user->assignRole($superAdminRole);
    }
}
