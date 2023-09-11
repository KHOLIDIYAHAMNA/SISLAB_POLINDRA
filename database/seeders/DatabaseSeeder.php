<?php

namespace Database\Seeders;
use App\Models\Admin;
use App\Models\Mahasiswa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

       Admin::create([
        'id_admin'=>12121,
        'name'=>'kholidyah amna',
        'email'=>'kholidiyah@gmail.com',
        'username'=>'kholidiyah',
        'password'=>bcrypt('12345'),
        'posisi'=>'KA LAB',
        'level'=>'super-admin',
       ]);
       Admin::create([
        'id_admin'=>232323,
        'name'=>'kia kio',
        'email'=>'kia@gmail.com',
        'username'=>'admin1',
        'password'=>bcrypt('12345'),
        'posisi'=>'Asisten',
        'level'=>'admin',
       ]);
      
    //    Mahasiswa::create([
    //     'nim'=>11111,
    //     'name'=>'mahasiswa',
    //     'email'=>'mhs@gmail.com',
    //     'password'=>bcrypt('12345'),
    //     'level'=>'mahasiswa',
    //    ]);
    }
}
