<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;

class KategoriController extends Controller
{
    public function index(Factory $view): View
    {
        /*$data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now(),
        ];

        DB::table('m_kategori')->insert($data);

        return 'Insert data baru berhasil!';*/

        /*$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';*/

        /*$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';*/

        $data = DB::table('m_kategori')->get();
        return $view->make('kategori', ['data' => $data]);
    }
}