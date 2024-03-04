<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Penjualan_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 20000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 2,
                'barang_id' => 1,
                'harga' => 2000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 3,
                'barang_id' => 1,
                'harga' => 2000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 600000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 5,
                'barang_id' => 2,
                'harga' => 600000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 600000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 7,
                'penjualan_id' => 7,
                'barang_id' => 3,
                'harga' => 5000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 5000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 9,
                'barang_id' => 3,
                'harga' => 5000,
                'jumlah' => 10,
            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 10,
                'barang_id' => 4,
                'harga' => 3000,
                'jumlah' => 25,
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 1,
                'barang_id' => 4,
                'harga' => 3000,
                'jumlah' => 250,
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 3000,
                'jumlah' => 150,
            ],
            [
                'detail_id' => 13,
                'penjualan_id' => 3,
                'barang_id' => 5,
                'harga' => 200000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 4,
                'barang_id' => 5,
                'harga' => 200000000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 200000000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 10000000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 7,
                'barang_id' => 6,
                'harga' => 10000000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 18,
                'barang_id' => 6,
                'harga' => 10000000,
                'jumlah' => 8,
            ],
            [
                'detail_id' => 19,
                'penjualan_id' => 19,
                'barang_id' => 7,
                'harga' => 2000000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 10,
                'barang_id' => 7,
                'harga' => 2000000,
                'jumlah' => 6,
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 1,
                'barang_id' => 7,
                'harga' => 2000000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 22,
                'penjualan_id' => 2,
                'barang_id' => 8,
                'harga' => 4000,
                'jumlah' => 550,
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 4000,
                'jumlah' => 650,
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 4,
                'barang_id' => 8,
                'harga' => 4000,
                'jumlah' => 755,
            ],
            [
                'detail_id' => 25,
                'penjualan_id' => 5,
                'barang_id' => 9,
                'harga' => 5000,
                'jumlah' => 50,
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 6,
                'barang_id' => 9,
                'harga' => 5000,
                'jumlah' => 50,
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 5000,
                'jumlah' => 50,
            ],
            [
                'detail_id' => 28,
                'penjualan_id' => 8,
                'barang_id' => 10,
                'harga' => 17000000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 9,
                'barang_id' => 10,
                'harga' => 17000000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 17000000,
                'jumlah' => 7,
            ],
        ];
        DB::table('t_penjualan_details')->insert($data);
    }
}