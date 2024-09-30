<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

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
// rotte php verranno precedute da api/
Route::get('/', [ProjectController::class, 'index']);                           //ALL
Route::get('/post-by-slug/{slug}', [ProjectController::class, 'postBySlug']);  //SLUG
Route::get('/types', [ProjectController::class, 'types']);                      //TYPE-ALL            
Route::get('/post-by-type/{slug}', [ProjectController::class, 'postByType']);  //TYPE-SLUG
Route::get('/tags', [ProjectController::class, 'tags']);                        //TAG-ALL  
Route::get('/post-by-tag/{slug}', [ProjectController::class, 'postByTag']);    //TAG-SLUG
