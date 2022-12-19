<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admins;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //password admin1 = 12345
        //password admin2 = 12345admin2
        // pas Paint me = ayogambar
        // pas Roti Enak = rotibakarenak
        // pas Mie Ayam = mieayam
        // pas jelita = ayocantik
        // pas kayu = jualankayu
        // pas kids = bajuanak
        $adminRecord = [
            ['id'=>2, 'name'=>'Roti Gembong', 'type'=>'vendor', 'vendorId'=>1, 'email'=>'roti@gmail.com', 'confirm'=>'No', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>3, 'name'=>'Ayo Ngopi','type'=>'vendor', 'vendorId'=>2, 'email'=>'ngopi@gmail.com', 'confirm'=>'No', 'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>4, 'name'=>'Takoyaki Wibu', 'type'=>'vendor', 'vendorId'=>3, 'email'=>'takoyaki@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>5, 'name'=>'Boba Bunder', 'type'=>'vendor', 'vendorId'=>4, 'email'=>'boba@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>6, 'name'=>'Klambi Anyar', 'type'=>'vendor', 'vendorId'=>5, 'email'=>'klambi@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>7, 'name'=>'Ails Wear', 'type'=>'vendor', 'vendorId'=>6, 'email'=>'ails@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>8, 'name'=>'Hijrah Store', 'type'=>'vendor', 'vendorId'=>7, 'email'=>'hijrah@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>9, 'name'=>'PantShoes', 'type'=>'vendor', 'vendorId'=>8, 'email'=>'store@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>10, 'name'=>'Paint Me', 'type'=>'vendor', 'vendorId'=>9, 'email'=>'paint@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>11, 'name'=>'Cat Mu!',  'type'=>'vendor', 'vendorId'=>10, 'email'=>'cat@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>12, 'name'=>'Toko Raja', 'type'=>'vendor', 'vendorId'=>11, 'email'=>'raja@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>13, 'name'=>'Ini Mable', 'type'=>'vendor', 'vendorId'=>12, 'email'=>'mable@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>14, 'name'=>'ElektroniKita!', 'type'=>'vendor', 'vendorId'=>13, 'email'=>'elektronik@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>15, 'name'=>'JualHP', 'type'=>'vendor', 'vendorId'=>14, 'email'=>'jual@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>16, 'name'=>'Ayo Cantik', 'type'=>'vendor', 'vendorId'=>15, 'email'=>'ayocantik@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>17, 'name'=>'skincareAn',  'type'=>'vendor', 'vendorId'=>16,'email'=>'skincarean@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>18, 'name'=>'Ayam Gepuk Ailsa', 'type'=>'vendor', 'vendorId'=>17, 'email'=>'ayamgepuk@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>19, 'name'=>'Thaitea Oren',  'type'=>'vendor', 'vendorId'=>18,'email'=>'thaitea@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>0],
            ['id'=>20, 'name'=>'Angkringan Neng',  'type'=>'vendor', 'vendorId'=>19,'email'=>'angkringan@gmail.com', 'confirm'=>'No',  'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G','status'=>0]
        ];
        Admins::insert($adminRecord);
    }
}
