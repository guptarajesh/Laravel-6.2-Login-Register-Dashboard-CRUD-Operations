<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class ReportController extends Controller
{

    public function index()
    {
	
		if(Auth::check()){  
        return view('reports/Reports');
        }
	  return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }  
	
	public function invoices()
    {
	
		if(Auth::check()){  
        return view('reports/Invoices');
        }
	  return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }  
	

   
    public function ViewReports()
    {

      if(Auth::check()){  
        return view('reports/ViewReports');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

	
	public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}