<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        request()->validate([
            'email' => 'required|max:254',
            'password' => 'required|max:254'
        ]);

        $loginInfo = client::where('email', '=', request('email'))->get();

        if(count($loginInfo) != 0 && Hash::check(request('password'), $loginInfo[0]->password)) {
            Session::put('client_id', $loginInfo[0]->client_id);
            Session::put('title', $loginInfo[0]->title);
            Session::put('position', $loginInfo[0]->position);

            return redirect('/');
        }
        else {
            return back()->with('authError', 'Neteisingi prisijungimo duomenys.');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function register() {
        request()->validate([
            'title' => 'required|max:254',
            'email' => 'required|email|unique:clients',
            'password' => 'required|max:254'
        ]);

        $client = new client();
        $client->title = request('title');
        $client->email = request('email');
        $client->password = Hash::make(request('password'));
        $client->position = 'manager';
        $client->creation_date = date('Y-m-d H:i:s');
        $client->save();

        return redirect('/login');
    }

    public function viewLogin() {
        return view('auth.login');
    }

    public function viewRegister() {
        return view('auth.register');
    }
}
