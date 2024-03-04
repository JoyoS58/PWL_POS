<?php

namespace Database\Seeders;

use App\Models\m_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Rama',
                'penjualan_kode' => 'P1',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Dina',
                'penjualan_kode' => 'P2',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Rini',
                'penjualan_kode' => 'P3',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Rama',
                'penjualan_kode' => 'P4',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Rama',
                'penjualan_kode' => 'P5',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Dani',
                'penjualan_kode' => 'P6',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Fajar',
                'penjualan_kode' => 'P7',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Bisma',
                'penjualan_kode' => 'P8',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Rama',
                'penjualan_kode' => 'P9',
                'penjualan_tanggal' => '2023-05-16',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Maya',
                'penjualan_kode' => 'P10',
                'penjualan_tanggal' => '2023-05-16',
            ],
        ];
        DB::table('t_penjualans')->insert($data);
    }
}
