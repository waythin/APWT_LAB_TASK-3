<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuserController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/' , [JuserController::class, 'dashboard'])->name('dash');
Route::get('/registration',[JuserController::class, 'registration'])->name('registration');
Route::post('/registraiton',[JuserController::class, 'registrationS'])->name('registrationS');

// Route::get('/userlogin',[JuserController::class, 'userLogin'])->name('userlogin');
// Route::post('/userlogincheck',[JuserController::class, 'userLoginCheck'])->name('userlogincheck');
// Route::get('/profile',[JuserController::class, 'profile'])->name('profile');


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/user/edit/{id}/{email}',[JuserController::class, 'userEdit'])->name('useredit');
Route::post('/user/edit',[JuserController::class, 'userEditS'])->name('useredit');
Route::get('/user/dash',[JuserController::class,'userDash'])->name('udash')->middleware('UserAuth');