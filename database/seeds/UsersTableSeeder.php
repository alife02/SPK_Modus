<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();


        User::create([
        	'first_name' => 'Alif',
        	'last_name' => 'Gibran',
            'username' => 'alife02',
        	'email' => 'alifgibransyarvani@gmail.com',
        	'password' => bcrypt('123456'),
            'status' => 'admin'
        	]);
    }
}
