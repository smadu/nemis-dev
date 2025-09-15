<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment_categories')->insert([
            [
                'appointment_category_id' => 'ACID01',
                'categories_name' => 'Non-Teaching',
                'description' => 'Description for Non-Teaching Category',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'appointment_category_id' => 'ACID02',
                'categories_name' => 'Graduate',
                'description' => 'Graduate Teachers (All graduates including post-graduates)',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'appointment_category_id' => 'ACID03',
                'categories_name' => 'Trained Teachers',
                'description' => 'Trained Teachers ( Including National Teaching Sciences Diploma / Science-Maths two year diploma/ Distant teacher training)',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'appointment_category_id' => 'ACID04',
                'categories_name' => 'Other Diplomas',
                'description' => 'Teachers who are not trained and others with two year/three year diplomas',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'appointment_category_id' => 'ACID05',
                'categories_name' => 'Probationary',
                'description' => 'Probationary/Trainee  teachers who are not enlisted to Sri Lanka Teaching Service',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'appointment_category_id' => 'ACID06',
                'categories_name' => 'Contract-basis',
                'description' => 'Teachers who receive allowances on contract-basis and other methods.',
                'active_status' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
