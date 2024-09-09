<?php

use App\Http\Controllers\BedSheetsController;
use App\Http\Controllers\CigaretteController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HandiCraftController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SportswearsController;
use App\Http\Controllers\WomanController;
use App\Models\order;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login',[LoginController::class,'index'])->name('login') ;
Route::get('/checkLogin',[LoginController::class,'checkLogin'])->name('checkLogin');
Route::get('/logOut',[LoginController::class,'logOut'])->name('logOut');
Route::get('/dashboard',[IndexController::class,'index'])->name('admin.index')->middleware('UserCheck');

Route::group(['prefix'=>'user','middleware'=>'UserCheck'],function(){
    Route::get('/',[IndexController::class,'adduser'])->name('admin.add.user');
    Route::get('/show',[IndexController::class,'showuser'])->name('admin.show.user');
    Route::post('/store',[IndexController::class,'user'])->name('admin.store.user');
    Route::get('user/edit/{id}',[IndexController::class,'edituser'])->name('admin.user.edit');
    Route::post('user/update',[IndexController::class,'updateuser'])->name('admin.user.update');
    Route::get('user/delete/{id}',[IndexController::class,'destroyuser'])->name('user.delete');

});


Route::group(['prefix'=>'custom/Soap','middleware'=>'UserCheck'],function(){
Route::get('/',[WomanController::class,'index'])->name('admin.woman');
Route::get('add',[WomanController::class,'create'])->name('admin.woman.add');
Route::post('store',[WomanController::class,'store'])->name('admin.woman.store');
Route::get('Soap/edit/{id}',[WomanController::class,'edit'])->name('admin.woman.edit');
Route::post('Soap/update',[WomanController::class,'update'])->name('admin.woman.update');
Route::get('/delete/{id}',[WomanController::class,'destroy'])->name('woman.delete');

});
Route::group(['prefix'=>'CBD','middleware'=>'UserCheck'],function(){
Route::get('/',[ManController::class,'index'])->name('admin.man');
Route::get('add',[ManController::class,'create'])->name('admin.man.add');
Route::post('store',[ManController::class,'store'])->name('admin.man.store');
Route::get('CBD/edit/{id}',[ManController::class,'edit'])->name('admin.man.edit');
Route::post('CBD/update',[ManController::class,'update'])->name('admin.man.update');
Route::get('CBD/delete/{id}',[ManController::class,'destroy'])->name('man.delete');
});



Route::group(['prefix'=>'Candle','middleware'=>'UserCheck'],function(){
    Route::get('/',[HandiCraftController::class,'index'])->name('show.handi.craft');
    Route::get('/add',[HandiCraftController::class,'create'])->name('add.handi.craft');
    Route::post('store',[HandiCraftController::class,'store'])->name('handi.craft.store');
    Route::get('Candle/edit/{id}',[HandiCraftController::class,'edit'])->name('handi.craft.edit');
    Route::post('Candle/update',[HandiCraftController::class,'update'])->name('handi.craft.update');
    Route::get('Candle/delete/{id}',[HandiCraftController::class,'destroy'])->name('handi.craft.delete');
});


Route::group(['prefix'=>'Vape','middleware'=>'UserCheck'],function(){

    Route::get('/',[BedSheetsController::class,'index'])->name('bed.sheets');
    Route::get('/add',[BedSheetsController::class,'create'])->name('add.bed.sheets');
    Route::post('store',[BedSheetsController::class,'store'])->name('bed.sheets.store');
    Route::get('Vape/edit/{id}',[BedSheetsController::class,'edit'])->name('bed.sheets.edit');
    Route::post('Vape/update',[BedSheetsController::class,'update'])->name('bed.sheets.update');
    Route::get('Vape/delete/{id}',[BedSheetsController::class,'destroy'])->name('bed.sheets.delete');

});
Route::group(['prefix'=>'admin/sports/wears','middleware'=>'UserCheck'],function(){

    Route::get('/',[SportswearsController::class,'index'])->name('admin.sports.wears');
    Route::get('/add',[SportswearsController::class,'create'])->name('add.sports.wears');
    Route::post('store',[SportswearsController::class,'store'])->name('store.sports.wears');
    Route::get('edit/{id}',[SportswearsController::class,'edit'])->name('sports.wears.edit');
    Route::post('update',[SportswearsController::class,'update'])->name('sports.wears.update');
    Route::get('delete/{id}',[SportswearsController::class,'destroy'])->name('sports.wears.delete');

});




Route::group(['prefix'=>'cigarette','middleware'=>'UserCheck'],function(){

    Route::get('/',[CigaretteController::class,'index'])->name('admin.cigarette');
    Route::get('/add',[CigaretteController::class,'create'])->name('add.cigarette');
    Route::post('store',[CigaretteController::class,'store'])->name('store.cigarette');
    Route::get('edit/{id}',[CigaretteController::class,'edit'])->name('cigarette.edit');
    Route::post('update',[CigaretteController::class,'update'])->name('cigarette.update');
    Route::get('delete/{id}',[CigaretteController::class,'destroy'])->name('cigarette.delete');

});









































































































































































































Route::group(['prefix'=>'orders','middleware'=>'UserCheck'],function(){
    Route::get('/',[OrderController::class,'order'])->name('admin.order');
    Route::get('delete/{id}',[OrderController::class,'destroy'])->name('order.delete');
    Route::get('/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
    Route::post('/update',[OrderController::class,'update'])->name('order.update');


});



// ====================== product View ======================



Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::get('/Soap/{id}', [FrontController::class,'womanProductView'])->name('productView');
Route::get('/Cigarette/{id}', [FrontController::class,'cigaretteProductView'])->name('cigaretteProductView');
Route::get('CBD/{id}', [FrontController::class,'manProductView'])->name('man.football');
Route::get('Candle/{id}', [FrontController::class,'handiProductView'])->name('handi.soccer');
Route::get('Vape/{id}', [FrontController::class,'bedProductView'])->name('bed.T-shirts');
Route::get('sportswears/View/{id}', [FrontController::class,'sportswears'])->name('sportswears');
// ====================== product View end ======================



// ====================== order  ======================

Route::POST('order', [FrontController::class,'order'])->name('place.order');

// ====================== order end ======================



// ====================== Front Pages  ======================

Route::get('custom/Soap/Boxes', [FrontController::class,'womanDetails'])->name('woman.details');
Route::get('custom/CBD/boxes', [FrontController::class,'manDetails'])->name('man.details');
Route::get('Custom/Candle/boxes', [FrontController::class,'Cosmetics'])->name('Cosmetics.details');
Route::get('vape/boxes', [FrontController::class,'bedDetails'])->name('bed.sheets.details');
Route::get('sport/swears', [FrontController::class,'sportswears_details'])->name('sportswears.details');
Route::get('custom/Cigarette/boxes', [FrontController::class,'Cigarettedetails'])->name('Cigarette.details');
Route::get('Contact', [FrontController::class,'Contact'])->name('Contact');

// ====================== Front Pages end ======================
