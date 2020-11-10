<?php

use Illuminate\Database\Seeder;

class AddDummyofficetrack extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
         ['title'=>'Finacial forum', 'start_date'=>'2018-11-12', 'end_date'=>'2018-11-15'],
         ['title'=>'Devtalk', 'start_date'=>'2018-11-13', 'end_date'=>'2018-11-25'],
         ['title'=>'Super Event', 'start_date'=>'2018-12-23', 'end_date'=>'2018-12-24'],
         ['title'=>'wtf event', 'start_date'=>'2018-12-19', 'end_date'=>'2018-12-27'],
        ];
        \DB::table('officetrack')->insert($data);
    }
}
