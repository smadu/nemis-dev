<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\employerAppointment;
use App\Models\EmployerCurrentAppointment;
use App\Models\People;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure the role exists
        $superAdminRole = Role::firstOrCreate(['name' => 'super admin']);

        $superAdminNic = '999999999999';

        // Create a specific People record (if not already exists)
        DB::table('people')->updateOrInsert(
            ['nic' => $superAdminNic], // unique NIC
            [
                'people_id'      => strtoupper(Str::random(12)),
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

        $checkPeopleDB = People::where('nic', $superAdminNic)->first();

        // Create User linked to People
        $user = User::updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'nic' => $superAdminNic,
                'people_id' => $checkPeopleDB->people_id,
                'name' => 'System Super Admin',
                'contact' => '0712345678',
                'password' => Hash::make('password@*'), // default password
                'active_status' => '1',
            ]
        );

        employerAppointment::updateOrCreate([
            'appointment_id' => strtoupper(Str::random(12)),
            'employee_id' => $checkPeopleDB->people_id,
            'first_appointment_date' => now(),
            'retirement_date' => now()->addYears(35),
            'service_id' => 'SER006',
            'rank_id' => 'RANK018',
            'position_id' => 'POS003',
            'office_level_id' => 'OLID001',
            'office_id' => 'MOE0000001',
            'appointment_category_id' => 'ACID01',
            'appointment_letter_no' => 'LETTER001',
            'appointment_letter' => 'letter.pdf',
            'active_status' => '1',
        ]);

        $checkEmployeeCurrentAppointmentDB = employerAppointment::where('employee_id', $checkPeopleDB->people_id)->first();

        EmployerCurrentAppointment::updateOrCreate([
            'appointment_id' => $checkEmployeeCurrentAppointmentDB->appointment_id,
            'employee_id' => $checkEmployeeCurrentAppointmentDB->employee_id,
            'appoint_date' => $checkEmployeeCurrentAppointmentDB->first_appointment_date,
            'service_id' => $checkEmployeeCurrentAppointmentDB->service_id,
            'rank_id' => $checkEmployeeCurrentAppointmentDB->rank_id,
            'office_level_id' => $checkEmployeeCurrentAppointmentDB->office_level_id,
            'position_id' => $checkEmployeeCurrentAppointmentDB->position_id,
            'office_id' => $checkEmployeeCurrentAppointmentDB->office_id,
        ]);

        // Assign Super Admin role
        $user->assignRole($superAdminRole);
    }
}
