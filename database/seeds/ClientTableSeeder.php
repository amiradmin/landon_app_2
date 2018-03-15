<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
          [
            'title'=>'mr',
            'name'=>'Amir',
            'last_name'=>'Behvandi',
            'address'=>'Tehran',
            'zip_code'=>'021',
            'city'=>'Tehran',
            'state'=>'Tehran',
            'email'=>'amirbehvandi747@gmail.com',
          ]
        );


        DB::table('clients')->insert(
          [
            'title'=>'mr',
            'name'=>'Saqar',
            'last_name'=>'KhajeAmiri',
            'address'=>'Tehran',
            'zip_code'=>'021',
            'city'=>'Tehran',
            'state'=>'Tehran',
            'email'=>'Saqar@gmail.com',
          ]
        );
    }
}
