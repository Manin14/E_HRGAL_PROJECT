<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//pake auth
use Auth;

class LoginController extends Controller
{
    //belum jalan, pasword tinker harus bcrypt
    public function postlogin (Request $request){
      //dd($request->all()); 
      
<<<<<<< HEAD
      if (Auth::attempt($request->only('nik_user','password'))){
          return redirect('/beranda')->with(['success' => 'Berhasil Masuk']);
      }
     
    
      return redirect('login')->with(['success' => 'NIK dan Password Salah  ']);
=======
      if (Auth::attempt($request->only('email','password'))){
          return redirect('/beranda');
      }
     
    
      return redirect('login');
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
    }

    //jalan
    public function logout (Request $request){
        Auth::logout();

        return redirect('login');
      }
}
