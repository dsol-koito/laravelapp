<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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
// Route::get('hello', 'HelloController@index');
// ↑↑↑↑↑　laravel7までの記述方法

Route::get('hello', [ HelloController::class, 'index'] );
// Route::get('hello/{id?}/{pass?}', [ HelloController::class, 'index'] );
//Route::get('hello/{id?}', [ HelloController::class, 'index'] );

//Route::get('hello', [ HelloController::class, 'index'] );
// Route::get('hello/other', [ HelloController::class, 'other'] );

Route::post('hello', [ HelloController::class, 'post'] );


/*
Route::get('hello', function(){
    return view('hello.Index');
});
*/
/*
Route::get('hello', function(){
    return '<html><body>hello</body></html>';
}
);
*/