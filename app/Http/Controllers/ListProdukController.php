<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function getData()
    {
        $dataProduk = [
            ['id' => 1, 'nama' => 'Sweeter', 'harga' => 55000],
            ['id' => 2, 'nama' => 'Cardigan', 'harga' => 40000],
            ['id' => 3, 'nama' => 'Baju B', 'harga' => 20500],
            ['id' => 4, 'nama' => 'Celana ', 'harga' => 31200],
            ['id' => 5, 'nama' => 'Baju A', 'harga' => 142000] 
        ];

        return $dataProduk;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('list-produk', compact('data'));
    }
}


