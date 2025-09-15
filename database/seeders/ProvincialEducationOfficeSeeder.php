<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincialEducationOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provincial_education_offices')->insert([
            [
                'peo_id' => 'PEO001',
                'pmoe_id' => 'PMOE01', // Central Province
                'peo_name' => 'Provincial Department of Education - Central Province',
                'peo_short_name' => 'PDE - Central',
                'email' => 'info1@emis.lk',
                'phone' => '0112785142',
                'address' => 'Provincial Department of Education, Kandy, Sri Lanka',
                'postal_code' => '10121',
                'latitude' => '7.2906',
                'longitude' => '80.6337',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO002',
                'pmoe_id' => 'PMOE02', // Sabaragamuwa Province
                'peo_name' => 'Provincial Department of Education - Sabaragamuwa Province',
                'peo_short_name' => 'PDE - Sabaragamuwa',
                'email' => 'info2@emis.lk',
                'phone' => '0112785149',
                'address' => 'Ministry of Education, Ratnapura, Sri Lanka',
                'postal_code' => '10128',
                'latitude' => '6.6936',
                'longitude' => '80.3834',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO003',
                'pmoe_id' => 'PMOE03', // Eastern Province
                'peo_name' => 'Provincial Department of Education - Eastern Province',
                'peo_short_name' => 'PDE - Eastern',
                'email' => 'info3@emis.lk',
                'phone' => '0112785145',
                'address' => 'Ministry of Education, Trincomalee, Sri Lanka',
                'postal_code' => '10124',
                'latitude' => '8.5719',
                'longitude' => '81.2096',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO004',
                'pmoe_id' => 'PMOE04', // North Western Province
                'peo_name' => 'Provincial Department of Education - North Western Province',
                'peo_short_name' => 'PDE - North Western',
                'email' => 'info4@emis.lk',
                'phone' => '0112785146',
                'address' => 'Ministry of Education, Kurunegala, Sri Lanka',
                'postal_code' => '10125',
                'latitude' => '7.4828',
                'longitude' => '80.3503',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO005',
                'pmoe_id' => 'PMOE05', // Southern Province
                'peo_name' => 'Provincial Department of Education - Southern Province',
                'peo_short_name' => 'PDE - Southern',
                'email' => 'info5@emis.lk',
                'phone' => '0112785143',
                'address' => 'Provincial Department of Education, Galle, Sri Lanka',
                'postal_code' => '10122',
                'latitude' => '6.0329',
                'longitude' => '80.2158',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO006',
                'pmoe_id' => 'PMOE06', // Western Province
                'peo_name' => 'Provincial Department of Education - Western Province',
                'peo_short_name' => 'PDE - Western',
                'email' => 'info6@emis.lk',
                'phone' => '0112785141',
                'address' => 'Ministry of Education, Isurupaya, Battaramulla, Sri Lanka',
                'postal_code' => '10120',
                'latitude' => '6.890771237920349',
                'longitude' => '79.93037145427841',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO007',
                'pmoe_id' => 'PMOE07', // Northern Province
                'peo_name' => 'Provincial Department of Education - Northern Province',
                'peo_short_name' => 'PDE - Northern',
                'email' => 'info7@emis.lk',
                'phone' => '0112785144',
                'address' => 'Ministry of Education, Jaffna, Sri Lanka',
                'postal_code' => '10123',
                'latitude' => '9.6618',
                'longitude' => '80.0248',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO008',
                'pmoe_id' => 'PMOE08', // Uva Province
                'peo_name' => 'Provincial Department of Education - Uva Province',
                'peo_short_name' => 'PDE - Uva',
                'email' => 'info8@emis.lk',
                'phone' => '0112785148',
                'address' => 'Ministry of Education, Badulla, Sri Lanka',
                'postal_code' => '10127',
                'latitude' => '6.9969',
                'longitude' => '81.0584',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'peo_id' => 'PEO009',
                'pmoe_id' => 'PMOE09', // North Central Province
                'peo_name' => 'Provincial Department of Education - North Central Province',
                'peo_short_name' => 'PDE - North Central',
                'email' => 'info9@emis.lk',
                'phone' => '0112785147',
                'address' => 'Ministry of Education, Anuradhapura, Sri Lanka',
                'postal_code' => '10126',
                'latitude' => '8.3482',
                'longitude' => '80.3715',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
