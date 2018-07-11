<?php

Route::get('/', function () {
    return view('welcome');
});

/*
 @description Admin section routes start .
 @Please make migration of each model
 @command php artisan make:mode Models\yourmodel -m
*/
/*start from here*/
Route::get('/admin',['as'=>'login.index','uses'=>'Admin\LoginController@index']);
Route::get('/logout',['as'=>'logout.index','uses'=>'Admin\LoginController@logout']);
Route::post('/login/save',['as'=>'admin.login.store','uses'=>'Admin\LoginController@store']);
Route::get('/recover/password',['as'=>'admin.recover.password','uses'=>'Admin\RecoverPasswordController@getRecoverPassword']);
Route::post('/recover/password/post',['as'=>'admin.recover.password.post','uses'=>'Admin\RecoverPasswordController@postRecoverPassword']);
/*end section*/

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/dashboard',['as'=>'admin.dashboard.index','uses'=>'DashboardController@index']);
    
    Route::get('/profile/edit',['as'=>'admin.profile.edit','uses'=>'ProfileController@edit']);
    Route::post('/profile/update',['as'=>'admin.profile.update','uses'=>'ProfileController@update']);
	/*employee section start*/
	Route::any('/employee',['as'=>'employee.index','uses'=>'EmployeeController@index']);
    Route::get('/employee/create',['as'=>'employee.create','uses'=>'EmployeeController@create']);
    Route::post('/employee/store',['as'=>'employee.store','uses'=>'EmployeeController@store']);
    Route::get('/employee/{id}/edit',['as'=>'employee.edit','uses'=>'EmployeeController@edit']);
    Route::post('/employee/{id}/update',['as'=>'employee.update','uses'=>'EmployeeController@update']);
    Route::get('/employee/{id}/changePassword',['as'=>'employee.changePassword','uses'=>'EmployeeController@changePassword']);
	Route::post('/employee/changePassword/save',['as'=>'employee.storePassword','uses'=>'EmployeeController@changePasswordSave']);
    Route::get('/employee/delete/{id}',['as'=>'employee.delete','uses'=>'EmployeeController@delete']);
	/*end section*/
     
    /*boat section start*/
     Route::get('/boats',['as'=>'boat.index','uses'=>'BoatController@index']);
     Route::get('/boat/{boat}/edit',['as'=>'boat.edit','uses'=>'BoatController@edit']);
     Route::put('/boat/{boat}/update',['as'=>'boat.update','uses'=>'BoatController@update']);
    /*end section*/

    /*password change section*/
    Route::get('/changePassword',['as'=>'changePassword.index','uses'=>'ChangePasswordController@index']);
    Route::post('/changePassword/store',['as'=>'changePassword.store','uses'=>'ChangePasswordController@store']);
    /*end section*/
    
    /*species  section*/
     Route::get('/species',['as'=>'species.index','uses'=>'SpeciesController@index']); 
     Route::get('/species/create',['as'=>'species.create','uses'=>'SpeciesController@create']);
     Route::post('/species/store',['as'=>'species.store','uses'=>'SpeciesController@store']);
     Route::get('/species/edit/{id}',['as'=>'species.edit','uses'=>'SpeciesController@edit']);
     Route::put('/species/update/{id}',['as'=>'species.update','uses'=>'SpeciesController@update']); 
     Route::get('/species/delete/{id}',['as'=>'species.delete','uses'=>'SpeciesController@delete']); 
    /*end section*/

    /*role section*/
    Route::get('/roles',['as'=>'roles.index','uses'=>'RoleController@index']); 
    Route::get('/roles/edit/{id}',['as'=>'roles.edit','uses'=>'RoleController@edit']);
    Route::put('/roles/update/{id}',['as'=>'roles.update','uses'=>'RoleController@update']); 
    /*end section*/

    /*attribute section start*/
    Route::get('/staff/tasks',['as'=>'staffTask.index','uses'=>'StaffTaskController@index']);
    Route::get('/staff/tasks/create',['as'=>'staffTask.create','uses'=>'StaffTaskController@create']);
    Route::post('/staff/tasks/store',['as'=>'staffTask.store','uses'=>'StaffTaskController@store']);
    Route::get('/staff/tasks/{id}/edit',['as'=>'staffTask.edit','uses'=>'StaffTaskController@edit']);
    Route::post('/staff/tasks/update',['as'=>'staffTask.update','uses'=>'StaffTaskController@update']);
    Route::get('/staff/tasks/{id}/delete',['as'=>'staffTask.delete','uses'=>'StaffTaskController@delete']);
    /*end section*/


    /*trip section start*/
    Route::any('/trip',['as'=>'trip.index','uses'=>'TripController@index']);
    Route::get('/trip/create',['as'=>'trip.create','uses'=>'TripController@create']);
    Route::post('/trip/store',['as'=>'trip.store','uses'=>'TripController@store']);
    Route::get('/trip/{id}/edit',['as'=>'trip.edit','uses'=>'TripController@edit']);
    Route::put('/trip/{id}/update',['as'=>'trip.update','uses'=>'TripController@update']);
    Route::get('/trip/delete/{id}',['as'=>'trip.delete','uses'=>'TripController@delete']);
    Route::get('/trip/{id}/complete',['as'=>'trip.complete','uses'=>'TripController@completeTrip']);
    Route::post('/trip/{id}/complete-trip',['as'=>'trip.complete-post','uses'=>'TripController@completeTripPost']);
    /*end section*/

    /*booking start*/
    Route::any('/booking',['as'=>'booking.index','uses'=>'BookingController@index']);
    
    /*end section*/


});
/*end section*/