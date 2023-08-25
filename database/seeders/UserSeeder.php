<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    public function run(): void
    {

        for($i = 1; $i <=100; $i++){
                    
            DB::table('user_profile')->insert([

                'sure_name' => fake()->firstName(),
                'name' => fake()->name(),
                'o_name' => fake()->lastName(),
                'gender' => fake()->title('male'|'female') ,
                'm_status' => fake()->word(),
                'religion' => fake()->word(),
                'dob' => fake()->date(),
                'pob' => fake()->city(),
                'cob' => fake()->country(),
                'nid' => fake()->numberBetween(500500, 800800),
                'education' => fake()->word(),
                'visibility' => fake()->randomDigit(),
                'c_nation' => fake()->country(),
                'n_type' => fake()->word(),
                'o_nation' => fake()->country(),

                'pass_no' => fake()->numberBetween(500500, 800800),
                'pass_doi' => fake()->date(),
                'pass_poi' => fake()->city(),
                'pass_doe' => fake()->date(),
                'op_no' => fake()->numberBetween(50000, 60000),
                'op_doi' => fake()->date(),
                'op_poi' => fake()->city(),
                'op_doe' => fake()->date(),

                'phone' => fake()->phoneNumber(),
                'mobile' => fake()->phoneNumber(),
                'email' => fake()->safeEmail(),
                'pre_address' => fake()->address(),
                'per_address' => fake()->address(),
                
                'f_name' => fake()->firstNameMale(),
                'f_nation' => fake()->country(),
                'f_cob' => fake()->country(),
                'm_name' => fake()->firstNameFemale(),
                'm_nation' => fake()->country(),
                'm_cob' => fake()->country(),
                's_name' => fake()->firstNameMale(),
                's_nation' => fake()->country(),
                's_cob' =>fake()->country(),

                'tov' => fake()->word(),
                'noe' => fake()->randomNumber(),
                'pov' => fake()->country(),
                'edoj' => fake()->date(),
                'poa' => fake()->randomNumber(),
                'poe' => fake()->date(),
                'status' => fake()->word(),
                'password' => Str::random(10),
            ]);
        }
    }
}