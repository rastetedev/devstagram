<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    use ValidatesRequests;

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $request->request->add([
            'username' => Str::slug($request->username)
        ]);

        $this->validate($request, [
            'name' => ['required', 'max:30'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'unique:users', 'email', 'max:60'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->get('password'))
        ]);

        //Autenticar un usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]) ;

        return redirect()->route('posts.index');
    }
}
