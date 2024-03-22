<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listproductController extends Controller
{
    public function getData()
    {
        $dataproduct = [
            ['id' => 1, 'produk' => 'Sweeter',],
            ['id' => 2, 'produk' => 'Baju',],
            ['id' => 3, 'produk' => 'Cardigan',]
        ];

        return $dataproduct;
    }

    public function getAll()
    {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
