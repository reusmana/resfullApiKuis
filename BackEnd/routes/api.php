<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestMahasiswa;

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

Route::get('/api_route', function(){
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
});

Route::get("/insert_user", [TestMahasiswa::class, 'insert']);
Route::post("/insert_user", [TestMahasiswa::class, 'insert']);

Route::get('createdata', [TestMahasiswa::class, 'createdata']);
Route::get('/getSoal', [TestMahasiswa::class, 'getSoal']);
Route::post('/updateSiswa', [TestMahasiswa::class, 'updateSiswa']);
Route::get('/getSiswaHasil', [TestMahasiswa::class, 'getSiswaHasil']);