<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Authority;
use Carbon\Carbon;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authorities = [
            [
                'authority_id' => 'AUID01',
                'authority_name' => 'Ministry of Education',
                'description' => 'Central governing body for education policies in the country',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'authority_id' => 'AUID02',
                'authority_name' => 'Provincial Ministry of Education',
                'description' => 'Handles education administration at provincial level',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'authority_id' => 'AUID03',
                'authority_name' => 'Other',
                'description' => 'Other types of educational authorities',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($authorities as $authority) {
            Authority::firstOrCreate(
                ['authority_id' => $authority['authority_id']],
                $authority
            );
        }
    }
}
