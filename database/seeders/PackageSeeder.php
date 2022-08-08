<?php

namespace Database\Seeders;
use App\Models\Package;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [
                'name'=>'Bayi',
                'price'=>19900,
                'price_discount'=>14900,
                'total_user'=>938
            ],
            ['name'=>'Pelajar',
            'price'=>46900,
            'price_discount'=>23450,
            'total_user'=>4168
            ],
            ['name'=>'Personal',
            'price'=>58000,
            'price_discount'=>38900,
            'total_user'=>10017
            ],
            ['name'=>'Bisnis',
            'price'=>109900,
            'price_discount'=>65900,
            'total_user'=>3552]
        ];
        Package::insert($data);
    }
}
