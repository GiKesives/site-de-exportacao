<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviarFormulario(Request $request){
        dd($request->all());

        Contato::create([
     //nome da coluna no banco=> nome do campo do formulário
      'nome'=>$request->name,
      'email'=>$request->email,
      'message'=>$request->message,
        ]);
    }
    //
    public function contatoPage()
    {
        return view('app.contato');

    }

}
