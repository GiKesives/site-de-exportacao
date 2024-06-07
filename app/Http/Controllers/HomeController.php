<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
     public function homePage()
     {
         
        $produtos = Produto::all();
        return view('app.home', compact('produtos'));
     }

    //  public function admPage()
    //  {
    //      return view('admin.adm');
    //  }
}
