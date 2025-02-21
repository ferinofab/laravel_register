<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function main()
    {
        return view('register.main');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'number' => 'required',
            'login' => 'required',
            'password' => 'required'
        ]);
        $create = Register::firstOrCreate(
            ['number' => $validate['number']],
            [
                'number' => $validate['number'],
                'login' => $validate['login'],
                'password' => $validate['password']
            ]
        );

        if($create->wasRecentlyCreated) {
            return redirect()->route('register.blog');
        }
        else {
            $registered = 1;
            return redirect()->route('register.login', compact('registered'));
        }
    }
    public function login($registered)
    {
        return view('register.login', compact('registered'));
    }

    public function signin(Request $request)
    {
       $validate = $request->validate([
            'number' => 'required',
            'login' => 'required',
            'password' => 'required'
        ]);
        $register = Register::where('number', $request['number'])->first();
        if($register) {
            if($register->login == $request['login'] && $register->password == $request['password']) {
                return redirect()->route('register.blog');
            }
        }
        else {
            return redirect()->back();
        }

        


    }
    public function blog()
    {
        return view('register.blog');
    }
}
