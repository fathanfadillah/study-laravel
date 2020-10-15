<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ColController;

use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     $nama = 'FathanWebs';
//     return view('index',['nama' => $nama ]);
// });

// Route::get('/profile', function () {
//     return view('other/profile');
// });

// Route::get('/about', function () {
    
//     return view('other.about');
// });

//user
Route::post('/register', [UserController::class,'postRegister']
);

Route::post('/login', [UserController::class,'postLogin']
);

Route::get('/login', [UserController::class,'getLogin']
);

Route::get('/register', [UserController::class,'getRegister']
);



//product
// Route::post('/index', [ColController::class, 'index']);
Route::get('/', [ColController::class, 'index']);
Route::get('/profile', [ColController::class, 'profile']);
Route::post('produk/api', [ColController::class,'api'])->name('produk.api');

Route::get('/about', [ColController::class, 'about']);

Route::get('/product/create', [ProductsController::class, 'create']); //add
Route::post('/product', [ProductsController::class, 'store']);//nyimpen ke database

Route::get('/product/{product}', [ProductsController::class, 'show']);//detail

Route::get('/product/{product}/edit',[ProductsController::class,'edit']);//edit
Route::patch('/product/{product}',[ProductsController::class,'update']);//updatekedatabase

Route::get('/product', [ProductsController::class, 'index']);//showall


Route::delete('/product/{product}', [ProductsController::class,'destroy']);//delete


    
// Route::get('/upload', [ProductsController::class, 'upload']);
// Route::get('/upload/proses', [ProductsController::class, 'proses_upload']);