<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function CompraPage()
    {
        return view('app.compra');
    }
}
