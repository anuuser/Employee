<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EmployeesController;

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


Route::get('/about/{id}',function($id){
    $data=[
        'message'=> 'this is a message',
        'price'=>5000,
        'total'=>6000,
        'id'=>$id
    ];
    return view('about',$data);
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/home',function(){
    return view('home');
});


Route::get('/posts', [PostsController::class, 'index']);

Route::get('/user', [EmployeesController::class, 'index']);

Route::get('/user/create', [EmployeesController::class, 'create']);

Route::post('/user', [EmployeesController::class, 'store']);

Route::get('/user/{user}', [EmployeesController::class, 'show']);

Route::get('/user/{user}/edit', [EmployeesController::class, 'edit']);

Route::put('/user/{user}', [EmployeesController::class, 'update']);

Route::delete('/user/{user}/delete', [EmployeesController::class, 'destroy']);







