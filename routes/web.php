<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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


//user 
Route::get('/registration',[JuserController::class, 'registration'])->name('registration');
Route::post('/registraiton',[JuserController::class, 'registrationS'])->name('registrationS');
Route::get('/user/edit/{id}/{email}',[JuserController::class, 'userEdit'])->name('useredit');
Route::post('/user/edit',[JuserController::class, 'userEditS'])->name('useredit');
Route::get('/user/delete/{id}/{email}',[JuserController::class, 'userDelete']);
Route::get('/user/list',[JuserController::class, 'userList'])->name('list');
Route::get('/user/dash',[JuserController::class,'userDash'])->name('udash')->middleware('UserAuth');

//admin
Route::get('/adminRegistration',[AdminController::class, 'registration'])->name('adminReg');
Route::post('/adminRegistraiton',[AdminController::class, 'registrationS'])->name('adminRegS');
Route::get('/admin/edit/{id}/{email}',[AdminController::class, 'adminEdit'])->name('adminedit');
Route::post('/admin/edit',[AdminController::class, 'adminEditS'])->name('adminedit');
Route::get('/admin/dash',[AdminController::class,'adminDash'])->name('adash')->middleware('AdminAuth');


//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');



