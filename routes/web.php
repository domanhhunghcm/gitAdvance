<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\storeControl;
use App\Http\Controllers\ChannelController;
use App\hungServiceFacade\hungService;
use App\hungServiceFacade\hungProvider;

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
Route::get('/store', [storeControl::class, 'store']);
Route::get('/displayChanel', [ChannelController::class, 'displayChanel']);
Route::get('/hello', function ()
{
    $mail=new hungService("123","456","789");
    $mail->hello("1","2");
});
Route::get("/testFacade",function ()
{
    hungProvider::hello("manhhung","dohung");
});