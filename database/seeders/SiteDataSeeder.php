<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_data')->insert([
            'site_name' => 'WorkerCanadian',
            'site_title' => 'Canadim Immigration Made Simple',
            'sub_title' => 'Founded in 2010, the Canadim Law Firm is widely considered one of the most respected immigration law firms in Canada. We have earned our reputation as a world class law firm by providing dedication and personalized service to each and every unique case before us.',
            'cell_number' => '+88017629404805',
            'location' => 'A108 Adam Street, New York, NY 535022',
            'email' => 'exaple@mail.com',
            'short_desc' => 'Canadim is a Canadian Immigration Law Firm based in Dhaka, Quebec, and is widely considered one of the most well-respected immigration law firms in Canada. Our philosophy is simple. Work hard for our clients to achieve the best possible immigration results!',
            'twitter' => 'https://www.twitter.com',
            'linkedin' => 'https://www.linkedin.com',
            'instagram' => 'https://www.instagram.com',
            'facebook' => 'https://www.facebook.com',
            'bkash1' => '01762940480',
            'bkash2' => '01521466603',
        ]);
    }
}
