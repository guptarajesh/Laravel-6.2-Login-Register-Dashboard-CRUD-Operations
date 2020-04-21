<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }  

    public function registration()
    {
        return view('registration');
    }
    
    public function postLogin(Request $request)
    {   //dd($request);  die; 
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
		
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        //'contact_number' => 'required|contact_number|unique:users',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function dashboard()
    {

      if(Auth::check()){  
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

	public function create(array $data)
	{
	  return User::create([
	    'name' => $data['name'],
	    'email' => $data['email'],
	    'password' => Hash::make($data['password'])
	  ]);
	}
	
	public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}