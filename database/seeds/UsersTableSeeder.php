<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //this is admin area
        DB::table('users')->insert([
            "name"=>'admin',
            "role_id"=>1,
            "email"=>'admin@gmail.com',
            "nid"=>'232313232',
            "image"=>'avatar.jpg',
            "division"=>'dhaka',
            "district"=>'madaripur',
            "phone"=>'098327982',
            "location"=>'xyz',
            "password"=>bcrypt(12345678)
        ]);

        //this is manager area
          DB::table('users')->insert([
            "name"=>'manager',
            "role_id"=>2,
            "email"=>'manager@gmail.com',
            "nid"=>'232313232',
            "image"=>'avatar.jpg',
            "division"=>'dhaka',
            "district"=>'madaripur',
            "phone"=>'098327982',
            "location"=>'xyz',
            "password"=>bcrypt(12345678)
          ]);

        //this is user area
        DB::table('users')->insert([
          "name"=>'user',
          "role_id"=>3,
          "email"=>'user@gmail.com',
          "nid"=>'232313232',
          "image"=>'avatar.jpg',
          "division"=>'dhaka',
          "district"=>'madaripur',
          "phone"=>'098327982',
          "location"=>'xyz',
          "password"=>bcrypt(12345678)
        ]);
    }
}
