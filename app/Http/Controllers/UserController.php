<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate(10);
        //select * from users
        //return view('users.index', compact('users'));
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        $user = User::find($id);
        //select * from users where id
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'names' => $request->input('names'),
            'lastnames' => $request->input('lastnames'),
            'email' => $request->input('email')
        ]);
        return redirect('users')->with('status', 'Usuario '.$request->input('names').' creado');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('users')->with('status', 'Usuario '.$id.' eliminado');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id)->update([
            'names' => $request->input('names'),
            'lastnames' => $request->input('lastnames'),
            'email' => $request->input('email'),
        ]);
        return redirect('users')->with('status', 'Se ha actualizado correctamente el Usuario '.$request->input('names'));
    }
}
