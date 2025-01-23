<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiBookController;
use App\Http\Controllers\ApiCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// http://127.0.0.1:8000/api/getuser
Route::post('/getuser', [ApiUserController::class, 'get_user']);

// http://127.0.0.1:8000/api/createadmin
Route::post('/createadmin', [ApiUserController::class, 'create_admin']);

// http://127.0.0.1:8000/api/getbook
Route::post('/getbook', [ApiBookController::class, 'get_book']);

// http://127.0.0.1:8000/api/getcategory
Route::post('/getcategory', [ApiCategoryController::class, 'get_category']);

// http://127.0.0.1:8000/api/createcategory
Route::post('/createcategory', [ApiCategoryController::class, 'create_category']);

//test
Route::post('/getuserTesting', [ApiCategoryController::class, 'testing']);

