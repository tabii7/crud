<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\str;


class MemberSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('members')->insert([
'name'=>str ::random(10),
'email'=>str ::random(10).'@gmail.com',
'address'=>str ::random(10)
      ]); 
      

      
    }
}
