<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', 'PaganteController@index');
Route::get('/', 'ConfigurazioneController@index') -> name('configurazioni');
