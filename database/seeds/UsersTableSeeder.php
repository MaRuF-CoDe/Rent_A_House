<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'role_id'   => '1',
          'name'      => 'MaRuF',
          'username'  => 'admin',
          'email'     => 'maruf@gmail.com',
          'nid'     => '7354030509',
          'contact'     => '01521308477',
          'created_at' => '2021-04-21 13:20:14',
          'updated_at' => '2021-04-21 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);

        DB::table('users')->insert([
          'role_id'   => '1',
          'name'      => 'Didar',
          'username'  => 'admin_2',
          'email'     => 'didar@gmail.com',
          'nid'     => '7354000509',
          'contact'     => '01678801013',
          'created_at' => '2021-04-27 13:20:14',
          'updated_at' => '2021-04-27 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);

    DB::table('users')->insert([
          'role_id'   => '2',
          'name'      => 'Mr. Landlord',
          'username'  => 'landlord',
          'email'     => 'landlord@gmail.com',
          'nid'     => '7354030500',
          'contact'     => '01521308478',
          'created_at' => '2021-04-18 13:20:14',
          'updated_at' => '2021-04-18 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);

        DB::table('users')->insert([
          'role_id'   => '3',
          'name'      => 'Mr. Renter',
          'username'  => 'renter',
          'email'     => 'renter@gmail.com',
          'nid'     => '7354034500',
          'contact'     => '01521308498',
          'created_at' => '2021-04-18 13:20:14',
          'updated_at' => '2021-04-18 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);


    }
}
