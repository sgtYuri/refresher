<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [
    App\http\Controllers\DepartmentController::class,
     'department'
       
])->name('home');
          

Route::post('/save', [
 App\http\Controllers\DepartmentController::class,
  'save'
    
])->name('save');

Route::post('/delete', [
    App\http\Controllers\DepartmentController::class,
     'delete'
       
])->name('delete');
       
   

