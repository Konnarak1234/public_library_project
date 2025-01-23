<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RenewController;
use App\Http\Controllers\CartController;

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




Route::get('subscription', function () {
    return view('frontpage.subscription');
});


Route::get('footer', function(){
    return view('layout.footer');
});  

Route::get('master', function(){
    return view('layout.master');
});

// Route::get('bookReview', function () {
//     return view('frontpage.bookReview');
// });

// above are route to all front views

Route::get('backHeader', function(){
    return view('layout.Back-header');
});

// Route::get('userList', function(){
//     return view('backpage.userList'); 
//  });

// Route::get('Aaccount', function(){
//     return view('backpage.account');
// });

Route::get('paymentInformation', function(){
    return view('backpage.paymentInformation');
});

Route::get('transactionInformation', function(){
    return view('backpage.transactionInformation');
});

Route::get('subscriptionInformation', function(){
    return view('backpage.subscriptionInformation');
});

Route::get('downloadInformation', function(){
    return view('backpage.downloadInformation');
});



// above here is the route to all back views

//user controller

Route::get('register', [UserController::class, 'index']);


Route::get('userList',[UserController::class, 'get_user']);

Route::get('user/{id}/edit', [UserController::class, 'edit']);

Route::post('user/{id}/edit', [UserController::class, 'update']);

Route::get('user/{id}/delete', [UserController::class, 'delete']);

// book controller

Route::get('uploadBookCategory', [BookController::class, 'index']); // return view of uploadBookCategory

Route::post('uploadBookCategory', [BookController::class, 'store_category']); // create new book category and store it to book_category table

Route::get('bookCategory', [BookController::class, 'bookCategory']); // return view of bookCategory page  (1)

Route::get('bookCategory/{id}/edit', [BookController::class, 'edit_category']); // edit the book category information (2)

Route::post('bookCategory/{id}/update', [BookController::class, 'update_category']); // update the book category information (3)

Route::get('bookCategory/{id}/delete', [BookController::class, 'delete_category']); // delete the book category (4)

Route::get('uploadBook', [BookController::class, 'uploadBook']); // return view of uploadBook page

Route::post('uploadBook', [BookController::class, 'store_book']); // store the book information

Route::get('bookInformation', [BookController::class, 'bookInformation']); // return book information page

Route::get('bookInformation/{id}/edit', [BookController::class, 'edit_book']); // edit the book information

Route::post('bookInformation/{id}/update', [BookController::class, 'update_book']); // update the book information

Route::get('bookInformation/{id}/delete', [BookController::class, 'delete_book']); // delete the book 

Route::get('/', [BookController::class, 'homepage']); // return the home page with book and category datas

Route::get('/backhomepage', [BookController::class, 'backhomepage']); // return backpage for homepage

Route::get('bookReview/{id}/view', [BookController::class, 'bookReview']); // return the view of each specific book

Route::get('adminBookReview/{id}/view', [BookController::class, 'adminBookReview']);

// using the BookController to allocate some book data to the views

Route::get('frontHeader', [BookController::class, 'frontHeader']); // currently not using do to losing of data when using mastering layout

Route::get('categoryReview/{id}/view', [BookController::class, 'categoryReview']); // return the view of category


// Register controller

Route::post('register',[RegisterController::class, 'register']); // has two view register/registerAgain

// Login controller

Route::get('/form', [LoginController::class, 'loginPage']); // return login page

Route::post('form', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout']);


// Authentication controller

Route::get('profile', [AuthenticationController::class, 'profile']); // return the profile of specific user

Route::get('Uaccount', [AuthenticationController::class, 'account']); // return the account of specific user

Route::post('uplaod/profile/{id}', [AuthenticationController::class, 'uploadProfile']);

Route::get('Aaccount', [AuthenticationController::class, 'adminAccount']); // return the profile of specific admin


// Renew Controller

Route::get('rename', [RenewController::class, 'renamePage']); // return the rename page

Route::post('rename', [RenewController::class, 'rename']);

Route::get('newPassword', [RenewController::class, 'renewPasswordPage']); // return the newPassword page

Route::post('newPassword', [RenewController::class, 'renewPassword']);

Route::get('newTelephone', [RenewController::class, 'renewTelephonePage']); // return the newTelephone page

Route::post('newTelephone', [RenewController::class, 'renewTelephone']);

// Cart Controller

Route::get('add/cart/{id}', [CartController::class, 'addCart']);

Route::get('get/cart', [CartController::class, 'getCart']);

Route::get('remove/cart/{user}/{book}', [CartController::class, 'removeCart']);