<?php

use App\Http\Controllers\GorevController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/create",[GorevController::class,'olustur'])->name("task.create");
Route::post('/create',[TaskController::class,"store"] )->name("task.store");
Route::get('/kontrol',[GorevController::class,"kontrol"])->name("task.list");

Route::get('/edit/{id}',[TaskController::class,"edit"])->name("todo.edit");


