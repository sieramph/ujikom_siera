<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'username' => 'admin',
        	'password' => bcrypt('123qwe123'),
        	'level' => 'petugas'
        ]);

        Petugas::create([
            'nama_petugas' => 'sie',
            'level' => 'admin',
            'telp' => '0812861291',
            'user_id' => $user->id 
        ]);

        $user_2 = User::create([
            'username' => 'petugas',
            'password' => bcrypt('123qwe123'),
            'level' => 'petugas'
        ]);

        Petugas::create([
            'nama_petugas' => 'jhone doe',
            'level' => 'petugas',
            'telp' => '081286291',
            'user_id' => $user_2->id 
        ]);
    }
}
