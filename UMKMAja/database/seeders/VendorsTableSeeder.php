<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorRecord = [
            ['id'=>1, 'name'=>'Roti Gembong', 'email'=>'roti@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>2, 'name'=>'Ayo Ngopi', 'email'=>'ngopi@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>3, 'name'=>'Takoyaki Wibu', 'email'=>'takoyaki@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>4, 'name'=>'Boba Bunder', 'email'=>'boba@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>5, 'name'=>'Klambi Anyar', 'email'=>'klambi@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>6, 'name'=>'Ails Wear', 'email'=>'ails@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>7, 'name'=>'Hijrah Store', 'email'=>'hijrah@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>8, 'name'=>'PantShoes', 'email'=>'store@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>9, 'name'=>'Paint Me', 'email'=>'paint@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>10, 'name'=>'Cat Mu!', 'email'=>'cat@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>11, 'name'=>'Toko Raja', 'email'=>'raja@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>12, 'name'=>'Ini Mable', 'email'=>'mable@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>13, 'name'=>'ElektroniKita!', 'email'=>'elektronik@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>14, 'name'=>'JualHP', 'email'=>'jual@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>15, 'name'=>'Ayo Cantik', 'email'=>'ayocantik@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>16, 'name'=>'skincareAn', 'email'=>'skincarean@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>17, 'name'=>'Ayam Gepuk Ailsa', 'email'=>'ayamgepuk@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>18, 'name'=>'Thaitea Oren', 'email'=>'thaitea@gmail.com', 'confirm'=>'No', 'status'=>0],
            ['id'=>19, 'name'=>'Angkringan Neng', 'email'=>'angkringan@gmail.com', 'confirm'=>'No', 'status'=>0]
        ];
        Vendor::insert($vendorRecord);
    }
}
