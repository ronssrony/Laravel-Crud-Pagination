<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;

Route::get('/',[UserController::class, 'show']);

Route::get('/delete/{id}' , [UserController::class , 'Deleteuser'])->name('Deleteuser'); 

Route::get('/edit/{id}' , [UserController::class , 'Edituser'])->name('Edituser'); 
Route::post('/edit/{id}' , [UserController::class , 'Edit']) ;
Route::view('/add' , 'insertuser') ;
Route::post('/adduser', [UserController::class , 'Adduser']) ;
Route::view('/profile' , 'profilepage') ;



//PARAMETERIZE ROUTE //whereIn is a router constrain 
Route::get('/post/{id?}/' , function( $ID=null ){
      if($ID==null ) return "<h1>NO ID IS FOUND </h1>"; 
      else return "<h1>".$ID."</h1>" ;
})->whereIn('id', ['movie','song','paint']) ; 

//GROUP ROUTES
Route::prefix('page')->group(function(){
    Route::get('/about', function (){
        return "<h1>ABOUT PAGE</h1>" ;
    }) ;
});  

//FALLBACK FOR UNKNOWN ROUTES
Route::fallback(function(){
    return "<h1>PAGE NOT FOUND"; 
}); 