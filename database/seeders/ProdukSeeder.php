<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_toko = [
            'Alby Handmade',
            'Putri Handmade',
            'Ikko Handmade'
        ];

        foreach($nama_toko as $nama){
            Produk::create([
                'nama_toko' => $nama,
                'nama' => 'Accesories',
                'harga' => mt_rand(5000, 50000),
                'deskripsi' => 'Khas Kalimantan'
            ]);
        }
    }
}
