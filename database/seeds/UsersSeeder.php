<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@cakekinian.com',
            'password'  => bcrypt('admin123'),
            'alamat'    => 'Surabaya',
            'no_telp'   => '082334901664',
            'role_id'	=> 1
        ]);
    }
}
