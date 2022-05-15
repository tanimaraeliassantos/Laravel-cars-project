<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route to users
Route::get('/users', function (){
    return "Welcome to the users page";
});

//Route to users - Array(JSON)
Route::get('/users', function () {
    return ['PHP', 'HTML', 'Laravel'];
});

//Route to users - JSON object
Route::get('/users', function () {
    return response()->json([
        'name'=> 'Tanimara',
    'course'=> 'Laravel Beginner']);
});

//Route to users - function
Route::get('/users', function () {
    return redirect('/');
})
;

//firstproject.com == /
//firstproject.com/users == /users