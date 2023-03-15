<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('Home');
});
Route::get('a', function () {
    return view('Greeting');
});
Route::get('greeting', function () {
    return view('Home');
})->name('yeu');
Route::get('home/detail', function () {
    return "Anh chưa có người yêu ok";
});
Route::any('home/any', function () {
    return "Test any";
});
Route::get('home/{id}', function ($id) {
    return $id . " tao đang bị ngáo";
});
Route::get('home/{Price}/{Art}', function ($Price, $Art) {
    return $Art . ': ' . $Price;
});
Route::get('where', function () {
    return Redirect::route('any');
});
////-------------
Route::get("from", function(){
    return view('From');
});
Route::post("from", function(){
    return 'thanh cong';
});
Route::prefix('greeting')->group(function () {
    // Route::get('0',[RouteController::class,'greeting0']);
    // Route::get('1',[RouteController::class,'greeting1']);
    // Route::get('2',[RouteController::class,'greeting2']);
    Route::get('3/{id?}/{class?}', [RouteController::class, 'greeting3'])->name('yeu');
});

// Route::get('greeting', [RouteController::class, 'greeting3'])->name('yeu');
