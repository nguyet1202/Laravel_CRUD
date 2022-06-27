<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\sumController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Create_Table;
use App\Http\Controllers\HomeController;
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
// Route::get('tinhtong',[sumController::class,function()
// {
//     return view('Sum');
// }
// ]);

// Route::post('tinhtong',[sumController::class,'Result']);

// Route::get('tinhtong',[sumController::class,function(){
//         return view('sum');
//     }]);
// Route::post('tinhtong',[sumController::class,'tinhtong']);
    

// Route::get('signup',[signupController::class,'index']);
// Route::post('signup',[signupController::class,'displayInfor']);
Route::get('/',[PageController::class,'getIndex']); 
// Route::get('/',[Create_Table::class,'product_table']); 

// Route::get('/',[HomeController::class, 'index']);
// Route::post('/',[HomeController::class, 'addRooms']);
// Route::get('/',[function(){
//             $data = DB::table('users')->orderBy('name','desc')->get();
//             print_r($data);
//         }]);

// Route::get('/',[function(){
//         $data = DB::table('users')->find(3);
//         print_r($data);
//     }]);
Route::get('/type/{id}', [PageController::class , 'getLoaiSp']);
Route::get('/admin-add-form',[PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form',[PageController::class, 'postAdminAdd']);

Route::get('/showadmin',[PageController::class, 'getIndexAdmin']);


Route::get('/admin-edit-form/{id}',[PageController::class,'getAdminEdit']);
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);
