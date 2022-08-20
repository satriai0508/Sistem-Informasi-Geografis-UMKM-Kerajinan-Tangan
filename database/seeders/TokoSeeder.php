<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jam_buka = '08:00:00';
        $jam_tutup = '22:00:00';

        Toko::create([
            'x' => '-0.471852',
            'y' => '117.160556',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Alby Handmade',
            'no_hp' => '08125461564',
            'alamat' => 'Jl. Gelatik 2 No. 1, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);

        Toko::create([
            'x' => '-0.465523',
            'y' => '117.172613',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Putri Handmade',
            'no_hp' => '082122074447',
            'alamat' => 'Jl. DI Panjaitan No. 10, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);

        Toko::create([
            'x' => '-0.462351',
            'y' => '117.174818',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Ikko Handmade',
            'no_hp' => '085348555518',
            'alamat' => 'Jl. DI Panjaitan No. 12, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);
    }
}
