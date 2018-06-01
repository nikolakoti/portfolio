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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::middleware('lang')
        ->group(function() {
            
            Route::get('/', function() {
                
                return redirect()->route('home');
            });

            Route::get('/', 'HomeController@index')->name('home');

           
            Route::get('/ajax/work-experience/{lang?}', 'JobsController@listJobs')->name('jobs');

            Route::get('/ajax/education/{lang?}', 'EducationController@listEducation')->name('education');

            Route::post('/contact/{lang?}', 'ContactFormController@process')->name('contact');
            
            
        });

 


Auth::routes();



//CMS Admin routes 



Route::middleware('auth')
        ->prefix('admin')
        ->namespace('Admin')
        ->group(function() {

    Route::get('/', function() {
        
        return redirect()->route('admin.dashboard');
    });        
            
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    
    Route::get('/jobs', 'JobsController@index')->name('admin.jobs');
    
    Route::get('/add-job', 'JobsController@add')->name('admin.jobs.add');
});





