<?php

use Illuminate\Support\Facades\Route;

Route::resource('/contrats', 'ContratController');

Route::get('/welcome', 'L5ModularController@welcome');


Route::resource('/employes', 'EmployeController');
Route::resource('/paiements', 'PaiementController');




