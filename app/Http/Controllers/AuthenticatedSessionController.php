<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){

        $credentials =  $request ->validate([
            'email' =>['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

       if( !Auth::attempt($credentials, true)){
        return to_route('login');
       }

       $request->session()->regenerate();

       return redirect()->intended('curso');

        //return $credentials;
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');

    }
}
