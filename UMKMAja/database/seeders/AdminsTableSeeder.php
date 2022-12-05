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
            ['id'=>1, 'name'=>'Admin 1', 'type'=>'admin', 'vendorId'=>0, 'email'=>'admin@gmail.com', 
            'password'=>'$2a$12$55ePP3eU7zM5Ss2Cr1OEWu13YRiZFr14w//NL1PW/Odz1erDdpl8G', 'status'=>1, 'confirm'=>'No'],
        ];
        Admins::insert($adminRecord);
    }
}
