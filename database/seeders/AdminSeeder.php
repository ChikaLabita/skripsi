<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = [
            'fullname' => 'Admin',
            'username' => 'adminWeb',
            'password' => bcrypt('password'),
        ];

        Admin::create($admin);
    }
}
