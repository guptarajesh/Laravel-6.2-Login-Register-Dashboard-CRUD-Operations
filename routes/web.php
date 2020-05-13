<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes
	Route::get('/', function () {
		return view('welcome');
	});
/* For Login/Registeration */
	Route::get('login', 'AuthController@index');
	Route::post('post-login', 'AuthController@postLogin'); 
	Route::get('registration', 'AuthController@registration');
	Route::post('post-registration', 'AuthController@postRegistration'); 
	Route::get('logout', 'AuthController@logout');
/* For Dashboard */
	Route::get('dashboard', 'AuthController@dashboard'); 
	Route::post('dashboard', 'AuthController@dashboard'); 
/* For Customer Module */
	Route::get('customers', 'CustomerController@index'); 
	Route::get('customers/add-customers', 'CustomerController@AddCustomers'); 
	Route::post('post-customer', 'CustomerController@postCustomer'); 
	Route::get('customers/edit-customers/{customerId}', 'CustomerController@EditCustomers'); 
	Route::put('customer-update/{id}', 'CustomerController@postCustomerUpdate'); 
	Route::get('customers/view-customers/{customerId}', 'CustomerController@ViewCustomers');
	Route::get('customers/delete-customers/{id}', 'CustomerController@DeleteCustomers'); 
	Route::resource('customers', 'CustomerController');
	
	/* For Vehicle Module */
	Route::get('vehicles', 'VehicleController@index'); 
	Route::get('vehicles/add-vehicles', 'VehicleController@AddVehicles'); 
	Route::get('vehicles/edit-vehicles', 'VehicleController@EditVehicles'); 
	Route::get('vehicles/view-vehicles', 'VehicleController@ViewVehicles');
	Route::get('delete-vehicles', 'VehicleController@DeleteVehicles');  

/* For Report Module */
	Route::get('reports', 'ReportController@index'); 
	Route::get('reports/invoices', 'ReportController@invoices'); 
/*	Route::get('reports/add-reports', 'ReportController@AddReports'); 
	Route::get('reports/edit-reports', 'ReportController@EditReports'); 
*/	Route::get('reports/view-reports', 'ReportController@ViewReports');
	Route::get('delete-reports', 'ReportController@DeleteReports');  

 
	/*Route::match(['post'], '/dashboard', function(){
		return view('dashboard');
	});*/
	
	Route::get('home', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');

    // Store a piece of data in the session...
    session(['key' => 'value']);
	});

	Route::view('/examples/plugin-helper', 'examples.plugin_helper');
	Route::view('/examples/plugin-init', 'examples.plugin_init');
	Route::view('/examples/blank', 'examples.blank');
	
	