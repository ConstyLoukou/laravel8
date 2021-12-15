<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () { 
    //return '<h1> Mon Nom est: '.$noms.' et Mon Id est: '.$id.'</h1>';
    return view('pages.tableau');
});*/

Route::get('/', 'App\Http\Controllers\PagesController@home');

Route::get('/inscription', 'App\Http\Controllers\PagesController@inscription');

Route::get('/tableau', 'App\Http\Controllers\PagesController@tableau');

Route::get('/add', 'App\Http\Controllers\PagesController@add');

Route::get('/show/{id}', 'App\Http\Controllers\PagesController@show');

Route::get('/create', 'App\Http\Controllers\PagesController@create');

Route::post('/saveetudiant', 'App\Http\Controllers\PagesController@saveetudiant');
Route::post('/inscription', function(){
    
    $etudiant = new App\Models\Etudiant;
    $etudiant->etud_name = request('etud_name');
    $etudiant->etud_firstname = request('etud_firstname');
    $etudiant->etud_number = request('etud_number');
    $etudiant->etud_email = request('etud_email');
    $etudiant->etud_diplo = request('etud_diplo');
    $etudiant->etud_sex = request('etud_sex');
    $etudiant->password = request('password');

    $etudiant->save();

    return "Nous avons recu votre mail qui est " .request('etud_email');
});


