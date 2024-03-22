<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    
        public function getAll()
        {
            return view('list');
        }

    
}
