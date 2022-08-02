<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('settings')->insert([
           
            'title'=>'E-commerce Bid System',
            'meta_description'=>'E-commerce shopping System',
            'meta_keywords'=>'E-commerce shopping System website',
            'logo'=>'frontend/img/core-img/logo.png',
            'favicon'=>'',
            'address'=>'Dhaka dhanmondi',
            'email'=>'E-commerce@gmail.com',
            'phone'=>'0162564554',
            'footer'=>'Dipak Debnath',
            'facebook_url'=>'',
            'twitter_url'=>'',
            'linkedin_url'=>'',
        
            ]);
    }
}
