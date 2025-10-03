<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('people')->insert([
                'people_id'      => strtoupper(Str::random(12)),
                'nic'            => $faker->randomElement([
                                        strtoupper($faker->bothify('#########V')), 
                                        $faker->numerify('############')
                                    ]),
                'title_id'       => $faker->randomElement(['TIT01', 'TIT02', 'TIT03', 'TIT04', 'TIT05']),
                'full_name'      => $faker->name,
                'gender'         => $faker->randomElement(['1', '2']),
                'date_of_birth'  => $faker->date('Y-m-d', '-18 years'),
                'religion_id'    => $faker->randomElement(['REL01','REL02','REL03']),
                'ethnicity_id'   => $faker->randomElement(['ETH01','ETH02','ETH03']),
                'civil_status_id'   => $faker->randomElement(['CS01', 'CS02', 'CS03']),
                'health_condition' => $faker->randomElement(['0', '1']),
                'blood_group_id' => $faker->randomElement(['BG01','BG02','BG03','BG04','BG05','BG06','BG07','BG08']),
                'email'          => $faker->unique()->safeEmail,
                'phone'          => $faker->numerify('07########'),
                'district_id'    => $faker->randomElement(['DIS001', 'DIS002', 'DIS003']),
                'gn_division_id' => $faker->randomElement(['GND00001','GND00002','GND00003']),
                'address_line1'  => $faker->streetAddress,
                'address_line2'  => $faker->city,
                'address_line3'  => $faker->state,
                'postal_code'    => $faker->postcode,
                //'latitude'       => number_format($faker->latitude, 6),
                //'longitude'      => number_format($faker->longitude, 6),
                'profile_picture'=> 'default.png',
                'active_status'  => '1',
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]);
        }
    }
}
