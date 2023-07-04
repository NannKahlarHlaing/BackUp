<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
class AdminLoginController extends Controller
{
    public function showLoginform(){
        // if(Auth::check()){
    	   // return view('template');
        // }else{
            return view('auth.adminLogin');
        // }
    }

    public function login(Request $request){
    	// $this->validate($request,[
    	// 	'email' => 'required|email',
    	// 	'password' => 'required|min:6'
    	// ]);
        
    	// if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    	// 	return redirect()->intended('backend');
    	// }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('dashboard');
            return redirect()->intended('backend');
        }

    	return back()->withErrors(['email' => 'Email or password is wrong.']);
    }
    public function register(){

        return view('auth.register');
    }
    public function registeruser(Request $request){
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        return redirect('/');
    }
}
