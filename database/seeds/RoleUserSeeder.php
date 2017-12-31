<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Master\RoleUsers::insert([
            'role' => 'Admin'
        ]);
        \App\Model\Master\RoleUsers::insert([
            'role' => 'Toko'
        ]);
    }
}
