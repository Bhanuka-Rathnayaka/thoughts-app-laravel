<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Http\Request;

//Dashboaard
Route::get('/',[DashboardController::class , 'index'])->name('dashboard');

//load profile page
Route::get('/profile',[ProfileController::class ,'index']);

//load terams page
Route::get('/terms',function(){
    return view('terms');
});

// <------------------------------submit ideas from submit-idea blade--------------------------------------------------->


//Route::post('/idea',[DashboardController::class ,'index']);
            //or
//Route::get('/idea', [DashboardController::class,'index'])->name('idea.index');
Route::post('/idea', [IdeaController::class,'store'])->name('idea.create');

//<-------------------------------------------------------------------------------------------------------------->


//</////////////////////////////Generating cesrf/////////////////////////////////////////////////////////////////>

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

});


//<-------------------------------------------------------------------------------------------------------------->



