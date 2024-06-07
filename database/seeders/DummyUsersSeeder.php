<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'putri',
                'email'=>'putri@gmail.com',
                'role'=>'admin_goverment',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'adel',
                'email'=>'adel@gmail.com',
                'role'=>'admin_budaya',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'pipit',
                'email'=>'pipit@gmail.com',
                'role'=>'admin_ekonomi',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'faris',
                'email'=>'faris@gmail.com',
                'role'=>'admin_pendidikan',
                'password'=>bcrypt('123456')
            ],
            ];

            foreach($userData as $key => $val){
                User::create($val); 
            }
    }
}
