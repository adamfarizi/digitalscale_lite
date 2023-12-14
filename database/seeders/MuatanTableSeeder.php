<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Muatan;

class MuatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Muatan::create([
            'jenis_muatan' => 'Batu Bara',
            'berat_muatan' => 2000,
            'beban_seluruh' => 3000,
            'verifikasi_1' => 'belum',
            'verifikasi_2' => 'belum',
        ]);
    }
}
