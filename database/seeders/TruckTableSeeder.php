<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Truck;

class TruckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Truck::create([
            'plat_nomor' => 'N 4590 R',
            'jenis_truck' => 'Hino',
            'beban_kosong' => 1000,
            'beban_max' => 5000,
            'id_muatan' => 1,
            'id_user' => 1,
        ]);

    }
}
