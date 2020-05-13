<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomerController extends Controller
{

    public function index()
    {
	
		if(Auth::check()){  
		
		$customers = Customer::all();
/*  		DB::connection()->enableQueryLog(); 
		$queries = DB::getQueryLog();
		dd($queries);
*/        return view('customers.Customers', compact('customers'));
			
        }
	  return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }  

    public function AddCustomers()
    {
        if(Auth::check()){  
		
        return view('customers/AddCustomers');
		
        }
		return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
	
    public function postCustomer(Request $request)
    {  
	 
        request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'username' => 'required',
		'servername' => 'required',
		'vehicles' => 'required',
        ]);
		
        $data = new Customer([
            'fullname' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'vehicles' => $request->get('vehicles'),
            'communication' => $request->get('communication'),
            'username' => $request->get('username'),
			'servername' => $request->get('servername'),
			'address' => $request->get('address')
			
        ]);
		
        $data->save();
		
		return redirect('/customers')->with('success', 'Customer is successfully Added');

		
    }
    
    public function ViewCustomers($customerId)
    {

      if(Auth::check()){  
	  
	    $customers = Customer::find($customerId);
		
		return view('customers/ViewCustomers')->with('customer', $customers);
		
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

	
	public function EditCustomers($customerId)
    {
        if(Auth::check()){  
		
		     $customer = Customer::findOrFail($customerId);
		
        return view('customers/EditCustomers', compact('customer'));
		
        }
		return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
	
	public function postCustomerUpdate(Request $request, $id)
    {   
	
		$validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required',
			'username' => 'required',
			'servername' => 'required',
			'vehicles' => 'required',
			'communication' => '',
			'address' => '',

        ]);
		
		//dd($validatedData); die;
		
        	Customer::whereId($id)->update($validatedData);
		
		return redirect('/customers')->with('success', 'Customer is successfully updated');

    }
	
	public function DeleteCustomers($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer is successfully deleted');
    }
	
	public function logout() {
	
        Session::flush();
        Auth::logout();
		
        return Redirect('login');
    }
}