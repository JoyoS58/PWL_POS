<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'laptop',
                'barang_nama' => 'Laptop',
                'harga_beli' => 19000000,
                'harga_jual' => 20000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'celana',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 500000,
                'harga_jual' => 600000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'mie',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'pensil',
                'barang_nama' => 'Pensil 2B',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'mobil',
                'barang_nama' => 'Mobil',
                'harga_beli' => 190000000,
                'harga_jual' => 200000000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'smartphone',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 9000000,
                'harga_jual' => 10000000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'kemeja',
                'barang_nama' => 'Kemeja Putih',
                'harga_beli' => 1900000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'roti',
                'barang_nama' => 'Roti',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'buku',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'motor',
                'barang_nama' => 'Sepeda Motor',
                'harga_beli' => 16000000,
                'harga_jual' => 17000000,
            ],
        ];
        DB::table('m_barangs')->insert($data);
    }
}
