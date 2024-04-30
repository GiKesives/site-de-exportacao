<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNosPage()
    {
        return view('app.sobre-nos');
    }
}
