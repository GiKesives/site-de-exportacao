<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoPageController extends Controller
{
    public function produtoPage()
    {
        return view('app.produtos');
    }
}
