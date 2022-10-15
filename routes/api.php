<?php

use App\Http\Controllers\AuthorsController;
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

//adding a middleware to the route 
//and it's also nice to add a version prefix to the 
//api you created . 
Route::middleware("auth:api")->prefix('v1')->group(function()
{
     Route::get('/user',function(Request $request)
     {
        return $request->user();
     });

     Route::get('/authors/{author}',[AuthorsController::class,'show']);
});

