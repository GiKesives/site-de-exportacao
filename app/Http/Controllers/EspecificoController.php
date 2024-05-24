<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EspecificoController extends Controller
{
    public function especificoPage()
    {
        return view('app.produtoEspecifico');
    }
}
