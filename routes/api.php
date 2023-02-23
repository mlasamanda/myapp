<?php
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::resource('admin',AdminController::class);
//Route::get('getallusers',[AdminController::class ,'index']);
//Route::post('send',[AdminController::class ,'store']);
//Route::put('updateDetail/{id}',[AdminController::class,'update']);
//Route::delete('updateDetail/{id}',[AdminController::class,'update']);