<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('countries')->insert(
            [
            'name' => "Palestine",
            'phone_prefix' => 1111
            ]);
            DB::table('countries')->insert(
            [
            'name' => "Jordan",
            'phone_prefix' => 2222
            ]);
            DB::table('countries')->insert(
            [
            'name' => "Lebanon",
            'phone_prefix' => 3333
            ]);
            DB::table('countries')->insert(
            [
            'name' => "Netherlands",
            'phone_prefix' => 4444
            ]);                                               
            DB::table('countries')->insert(
            [
            'name' => "Iraq",
            'phone_prefix' => 5555
            ]);            
            DB::table('countries')->insert(
            [
            'name' => "France",
            'phone_prefix' => 6666
            ]);
            DB::table('countries')->insert(
            [
            'name' => "Qatar",
            'phone_prefix' => 7777
            ]);
                                                                    
    }
}
