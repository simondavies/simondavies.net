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
        DB::table('users')->insert([
            'username' => 'simondavies',
            'password' => bcrypt('C*5aaYrCOY0#s1A'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
