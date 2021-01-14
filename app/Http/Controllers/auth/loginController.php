<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function homeLogin(){
        return view('auth.login');
    }
    public function homeLoginCek(){
        return view('auth.loginCek');
    }

    public function formLogin(Request $request){
        $dataLogin = User::where('name', $request->username)->firstOrFail();
        if($dataLogin){
            if(Hash::check($request->pw, $dataLogin->password)){
                return redirect('/info');
            }
            return redirect('/login')->with('gagal', 'Tidak Dapat Login');
        }
    }
    public function formLoginCek(Request $request){
        $dataLogin = User::where('name', $request->username)->firstOrFail();
        if($dataLogin){
            if(Hash::check($request->pw, $dataLogin->password)){
                return redirect('/data/data');
            }
            return redirect('/loginCek')->with('gagal', 'Tidak Dapat Login');
        }
    }
}
