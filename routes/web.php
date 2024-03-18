<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\WeatherController;

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

Route::get('/', function(){
    return 'Hello, World!';
});

Route::post('/submit', function(){
    return 'Form submitted successfully!';
});

Route::put('/update/{id}', function($id){
    return "Updated record with ID: $id";
});

Route::delete('/delete/{id}', function($id){
    return "Deleted record with ID: $id";
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/student', StudentController::class);

Route::get('/weather', [WeatherController::class, 'showWeatherForm']);
Route::post('/weather', [WeatherController::class, 'getWeather']);