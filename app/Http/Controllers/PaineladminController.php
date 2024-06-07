<?php

 namespace App\Http\Controllers;

 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use App\Models\Produto;
 use App\Models\Categoria;
 use App\Models\User;

 class PainelAdminController extends Controller
 {
     public function index()
     {
         return view('admin.adm');
     }

}
