<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);

    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {

        User::create([
        //nome da coluna no banco=> nome do campo do formulário
        'name'=>$request->nome,
        ''=>$request->descricao_categoria,
        ]);

        return view('admin.users.create');

    }


    public function show(User $user)
    {
        return view('admin.users.show', $user);
    }


    public function edit()
    {
        return view('admin.users.edit');
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
