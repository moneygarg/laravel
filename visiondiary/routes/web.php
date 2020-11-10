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

//Route::any('/uploadAvtar', function () {
//    dd("new test");;
////    return view('index');
//    return view('home.events');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/events/home/{id?}', 'HomeController@events');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', 'UserController@index')->name('home');

    //ProjectTypeController
    Route::get('/projectType', 'ProjectTypeController@index');
    Route::post('find/projectType', 'ProjectTypeController@find');
    Route::any('/edit/projectType/{id?}','ProjectTypeController@edit');
    Route::get('/delete/projectType/{id}','ProjectTypeController@delete');
    Route::delete('/delete/projectType/{id}','ProjectTypeController@destroy');


    //UsersController
    Route::get('/users','UserController@index');
    Route::get('/users/profile','UserController@profile');
    Route::post('/storeImage/{id}','UserController@storeImage')->name('storeImage');
    Route::post('/uploadAvatars/user/{id?}','UserController@uploadAvatars');
    Route::post('find/user', 'UserController@find');
    Route::any('/edit/user/{id?}/{type?}','UserController@edit');
    Route::get('/delete/user/{id}','UserController@delete');

    //Route::get('/edit/user/{id}','UserController@edit');
    //Route::post('/edit/user','UserController@update');
    Route::delete('/delete/user/{id}','UserController@destroy');

    //CredentialsController
    Route::get('/credentials/{type?}', 'CredentialsController@index');
    Route::post('find/credentials/{type?}', 'CredentialsController@find');
    Route::any('/edit/credentials/{id?}','CredentialsController@edit');
    Route::get('/delete/credentials/{id}','CredentialsController@delete');
    
    //RedminesController
    Route::get('/redmines', 'RedminesController@index');
    Route::post('find/redmines', 'RedminesController@find');
    Route::any('/edit/redmines/{id?}','RedminesController@edit');
    Route::get('/delete/redmines/{id}','RedminesController@delete');

    //EventsController
    Route::get('/events', 'EventsController@index');
    Route::post('find/events', 'EventsController@find');
    Route::any('/edit/events/{id?}','EventsController@edit');
    Route::any('/upload/events/{id?}','EventsController@upload');
    Route::get('/delete/events/{id}','EventsController@delete');
    Route::any('/editimage/events/{id?}','EventsController@editimage');
    Route::get('/deleteimage/events/{id}','EventsController@deleteimage');
    Route::post('/storeImage/{id}','EventsController@storeImage')->name('storeImage');
    Route::get('/allImages','EventsController@allImages')->name('allImages');
    
    //OfficetrackController
    Route::get('/officetrack', 'OfficetrackController@index');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
//    Route::get('/home', 'HomeController@index');
    
//    Route::resource('roles', 'Admin\RolesController');
//    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
//    
//    Route::resource('users', 'Admin\UsersController');
//    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
//    
//    Route::resource('clients', 'Admin\ClientsController');
//    Route::post('clients_mass_destroy', ['uses' => 'Admin\ClientsController@massDestroy', 'as' => 'clients.mass_destroy']);
//    
//    Route::get('get-employees', 'Admin\EmployeesController@GetEmployees');
//    Route::resource('employees', 'Admin\EmployeesController');
//    Route::post('employees_mass_destroy', ['uses' => 'Admin\EmployeesController@massDestroy', 'as' => 'employees.mass_destroy']);
//    
//    Route::resource('working_hours', 'Admin\WorkingHoursController');
//    Route::post('working_hours_mass_destroy', ['uses' => 'Admin\WorkingHoursController@massDestroy', 'as' => 'working_hours.mass_destroy']);
   
      Route::resource('officetrack', 'Admin\OfficetrackController');
//    Route::post('appointments_mass_destroy', ['uses' => 'Admin\AppointmentsController@massDestroy', 'as' => 'appointments.mass_destroy']);
//    Route::resource('services', 'Admin\ServicesController');
//    Route::post('services_mass_destroy', ['uses' => 'Admin\ServicesController@massDestroy', 'as' => 'services.mass_destroy']);
	
});