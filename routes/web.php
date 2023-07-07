<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(\App\Http\Controllers\InscriptionController::class)->group(function(){
    Route::any('/inscription', 'index')->name('inscription');
    Route::any('/_inscription/{participant}', 'choix')->name('choix');
    Route::any('/pdf/{participant}', 'pdfsection')->name('pdfsection');
    Route::get('/pdffile/{participant}', 'pdf')->name('pdf');
    Route::get('/about', 'about')->name('about');
    Route::get('/activites', 'activites')->name('activites');
});

Route::post('/attendee_email', function(Request $request){
   return response()->json([
       'success'=>True,
       'data'=>$request->input()
   ]);
})->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);


