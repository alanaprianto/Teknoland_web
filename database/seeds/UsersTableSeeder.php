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
        $admin = ['name' => 'Admin Technoland', 'email' => 'alan.aprianto@gmail.com' ,'password' => bcrypt('qwe123@@') ,'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()];
        \Illuminate\Support\Facades\DB::table('users')->insert([$admin]);
    }
}
