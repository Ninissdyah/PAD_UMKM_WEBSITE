<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akunSeeder =[
            ['id'=>1, 'name'=>'Admin 1', 'email'=>'admin@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>2, 'name'=>'Roti Gembong', 'email'=>'roti@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>3, 'name'=>'Ayo Ngopi','email'=>'ngopi@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>4, 'name'=>'Takoyaki Wibu','email'=>'takoyaki@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>5, 'name'=>'Boba Bunder', 'email'=>'boba@gmail.com','password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>6, 'name'=>'Klambi Anyar', 'email'=>'klambi@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>7, 'name'=>'Ails Wear','email'=>'ails@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>8, 'name'=>'Hijrah Store','email'=>'hijrah@gmail.com',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>9, 'name'=>'PantShoes', 'email'=>'store@gmail.com',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>10, 'name'=>'Paint Me', 'email'=>'paint@gmail.com',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>11, 'name'=>'Cat Mu!',  'email'=>'cat@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>12, 'name'=>'Toko Raja', 'email'=>'raja@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>13, 'name'=>'Ini Mable', 'email'=>'mable@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>14, 'name'=>'ElektroniKita!', 'email'=>'elektronik@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>15, 'name'=>'JualHP','email'=>'jual@gmail.com','password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>16, 'name'=>'Ayo Cantik', 'email'=>'ayocantik@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>17, 'name'=>'skincareAn','email'=>'skincarean@gmail.com',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>18, 'name'=>'Ayam Gepuk Ailsa','email'=>'ayamgepuk@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>19, 'name'=>'Thaitea Oren',  'email'=>'thaitea@gmail.com',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G'],
            ['id'=>20, 'name'=>'Angkringan Neng', 'email'=>'angkringan@gmail.com', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G']
        ];
        User::insert($akunSeeder);
    }
}
