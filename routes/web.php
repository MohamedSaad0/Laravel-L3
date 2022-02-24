<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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



// This Route Combines All Of The Bottom Routes
Route::resource('posts', PostController::class);





Route::get('/users/create',[UserController::class,"create"]);
Route::post('/users',[UserController::class,"store"]);


/*
Route::get('/posts', [PostController::class,"index"])->name('posts');

Route::get('posts/{id}', [PostController::class,"show"])->name('posts.show');

Route::get('/posts/{id}/edit', [PostController::class,"edit"])->name('posts.edit');

Route::post('/posts/{id}', [PostController::class, "update"])->name('posts.update');
    
Route::get('/posts/create', [PostController::class, "create"])->name('posts.create');

Route::post('/posts/{id}', [PostController::class, "destroy"])->name('posts.destroy');

Route::post('/posts', [PostController::class, "store"])->name('posts.store');
*/



























// Route::match(['get','delete'], "/profile", function(){
//     return view('myProfile');
// });

// Route::get('/', function () {
//     $data=[
//         "id"=>1,
//         "name"=>"Mohamed",
//         "body"=>"Wazzup",
//         "title"=>"Post Title"
//     ];
//     return view("welcome",$data);
// });

// Route::view('/hi','welcome');

// Route::redirect('/', '/profile');