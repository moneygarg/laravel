<?php

use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Connect to production database
     $live_database = DB::connection('mysql');
     // Get table data from production
        foreach($live_database->table('redmines')->get() as $data){
           // Save data to staging database - default db connection
           DB::table('redmines')->insert((array) $data);
        }
    }
}
