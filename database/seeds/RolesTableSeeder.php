<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //admin area
      DB::table('roles')->insert([
          "name"=>'admin'
      ]);

      //manager area
      DB::table('roles')->insert([
          "name"=>'manager'
      ]);

      //user area
      DB::table('roles')->insert([
          "name"=>'user'
      ]);
    }
}
