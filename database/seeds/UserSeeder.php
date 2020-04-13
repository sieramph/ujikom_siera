<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
        	'username'=> 'masyarakat',
        	'password'=> bcrypt('123qwe123'),
        	'level'=>'masyarakat'
        ]);
        Masyarakat::create([
            'nik' => '1234567891234567',
            'nama' =>'arya',
            'telp'=>'087833107291',
            'user_id' => $user->id,
        ]);
    }
}
