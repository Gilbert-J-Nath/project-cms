<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function login(){
        // $request->validate([
        //     'email' => 'required|String',
        //     'password' => 'required|String'
        // ]);

        // $user = new User();
        // $result = $user->get_user_by_uname($request->uname);

        // if (!empty($result)) {
        //     $storedPassword = $result[0]->Password;
        //     if ($storedPassword === hash('sha256', md5($request->passw))) {
        //         $loggedInUser = User::where('Username', $request->uname)->first();

        //         if ($loggedInUser->hasVerifiedEmail()) {
        //             Auth::login($loggedInUser);
        //             return  redirect('/dashboard')->with('status', 'Berhasil login');
        //         } else {
        //             return redirect('/login')->with('status', 'Silahkan Verifikasi Email Anda!');
        //         }
        //     }
        // }

        // return redirect('/login')->with('status', 'Username atau Password salah');
    }
}
