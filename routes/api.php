<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/animal', 'api\AnimalController');
Route::apiResource('/user', 'api\UserController');

//Route::get('dogslist','api\DogController@index' );
