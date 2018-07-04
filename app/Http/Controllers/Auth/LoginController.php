<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function login(){
        $valid = $this->validate(request(),[
            'usuario'=>'required',
            'password'=>'required'
         ]);
        if (Auth::attempt($valid)){
            $usuarioActual = Auth::user();
            if($usuarioActual->rols_id==1)
            {
                return redirect()->route('admin');

            }else{
                return redirect()->route('usuario');

            }
        }
    }

    public function cerrarSesion(){

        Auth::logout();
        return redirect()->route('/');
    }
}
