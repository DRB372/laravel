<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=date('Y-m-d H:i:s' ,strtotime('now'));
    DB::table('cars')->insert([
        'Name'=> 'Civic',
    'created_at'=>$now,
    'updated_at'=>$now,]);
    }
}
