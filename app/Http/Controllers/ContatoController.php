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

<<<<<<< HEAD
=======
    public function enviarFormulario(Request $request)
    {
        //return view('app.contato');
        dd($request->all());

        Contato::create([
            //nome da coluna no banco => nome do campo do formulário
            'nome' => $request->name,
            'email' => $request->email,
            'mensagem' => $request->message,
        ]);
    } 
>>>>>>> 38b8036b3d3d2539aa75d83aad68dedfda8d15d0
}
