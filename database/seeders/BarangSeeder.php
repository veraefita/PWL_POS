<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['kategori_id' => 2, 'barang_kode' => 'B003', 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['kategori_id' => 2, 'barang_kode' => 'B004', 'barang_nama' => 'Shampoo', 'harga_beli' => 15000, 'harga_jual' => 18000],
            ['kategori_id' => 3, 'barang_kode' => 'B005', 'barang_nama' => 'Pembersih Lantai', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Tisu', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['kategori_id' => 4, 'barang_kode' => 'B007', 'barang_nama' => 'Popok Bayi', 'harga_beli' => 50000, 'harga_jual' => 55000],
            ['kategori_id' => 4, 'barang_kode' => 'B008', 'barang_nama' => 'Susu Formula', 'harga_beli' => 60000, 'harga_jual' => 65000],
            ['kategori_id' => 5, 'barang_kode' => 'B009', 'barang_nama' => 'Lampu LED', 'harga_beli' => 25000, 'harga_jual' => 30000],
            ['kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Charger HP', 'harga_beli' => 35000, 'harga_jual' => 40000],
        ];

        DB::table('m_barang')->insert($data);
    }
}