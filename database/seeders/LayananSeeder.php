<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanans = [
            // Express 1 Hari
            ['nama_layanan' => 'Setrika (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Kg', 'harga' => 9000],
            ['nama_layanan' => 'Cuci Kering Lipat (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Kg', 'harga' => 9000],
            ['nama_layanan' => 'Cuci Kering Setrika (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Kg', 'harga' => 13000],
            ['nama_layanan' => 'Satuan Kaos (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 12000],
            ['nama_layanan' => 'Satuan Tops (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 18000],
            ['nama_layanan' => 'Satuan Celana (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 20000],
            ['nama_layanan' => 'Satuan Jaket (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 20000],
            ['nama_layanan' => 'Satuan Jas (Express 1 Hari)', 'kategori' => 'Express 1 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 25000],
            
            // Regular 2 Hari
            ['nama_layanan' => 'Setrika (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Kg', 'harga' => 5500],
            ['nama_layanan' => 'Cuci Kering Lipat (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Kg', 'harga' => 5000],
            ['nama_layanan' => 'Cuci Kering Setrika (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Kg', 'harga' => 8000],
            ['nama_layanan' => 'Satuan Kaos (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 8000],
            ['nama_layanan' => 'Satuan Tops (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 15000],
            ['nama_layanan' => 'Satuan Celana (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 15000],
            ['nama_layanan' => 'Satuan Jaket (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 17000],
            ['nama_layanan' => 'Satuan Jas (Regular 2 Hari)', 'kategori' => 'Regular 2 Hari', 'jenis_satuan' => 'Pcs', 'harga' => 20000],
            
            // Kilat 4 Jam
            ['nama_layanan' => 'Setrika (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Kg', 'harga' => 12000],
            ['nama_layanan' => 'Cuci Kering Lipat (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Kg', 'harga' => 12000],
            ['nama_layanan' => 'Cuci Kering Setrika (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Kg', 'harga' => 16000],
            ['nama_layanan' => 'Satuan Kaos (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Pcs', 'harga' => 16000],
            ['nama_layanan' => 'Satuan Tops (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Pcs', 'harga' => 24000],
            ['nama_layanan' => 'Satuan Celana (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Pcs', 'harga' => 25000],
            ['nama_layanan' => 'Satuan Jaket (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Pcs', 'harga' => 25000],
            ['nama_layanan' => 'Satuan Jas (Kilat 4 Jam)', 'kategori' => 'Kilat 4 Jam', 'jenis_satuan' => 'Pcs', 'harga' => 30000],
            
            // Perlengkapan
            ['nama_layanan' => 'Handuk', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 5000],
            ['nama_layanan' => 'Sejadah', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 5000],
            ['nama_layanan' => 'Sprei Set', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Set', 'harga' => 10000],
            ['nama_layanan' => 'Bantal Guling', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 10000],
            ['nama_layanan' => 'Selimut Kecil (Tipis)', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 15000],
            ['nama_layanan' => 'Selimut Besar (Tebal)', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 25000],
            ['nama_layanan' => 'Bedcover Single', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 25000],
            ['nama_layanan' => 'Bedcover Double', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pcs', 'harga' => 35000],
            ['nama_layanan' => 'Sepatu', 'kategori' => 'Perlengkapan', 'jenis_satuan' => 'Pasang', 'harga' => 50000],
        ];

        foreach ($layanans as $layanan) {
            DB::table('layanans')->insert([
                'nama_layanan' => $layanan['nama_layanan'],
                'kategori' => $layanan['kategori'],
                'jenis_satuan' => $layanan['jenis_satuan'],
                'harga' => $layanan['harga'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
