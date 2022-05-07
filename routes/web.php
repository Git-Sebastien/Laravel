<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Posts\CommentController;


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

Route::get('/',HomeController::class)->name('home');

Route::resource('/posts',PostsController::class,);

Route::get('posts/categorie/{id}/{name}',[CategoryController::class,'getCategory'])->name('categorie');

Route::post('/comment',[CommentController::class,'postComment'])->name('postComment')->middleware('web');

Route::post('/comment-delete/{comment}',[CommentController::class,'destroy'])->name('destroyComment')->middleware('web');

Route::get('/comment-edit/{id}',[CommentController::class,'editComment'])->name('editComment')->middleware('web');

Route::patch('/comment-update/{id}',[CommentController::class,'updateComment'])->name('updateComment')->middleware('web');

Route::post('/posts/{post}',[PostsController::class,'show'])->name('show_post');

Route::get('/user-info/{id}/{name}',[UserController::class,'userInfos'])->name('user');

Route::post('user-info/image_profile/{id}',[UserController::class,'getImage'])->name('upload_image');


// //////////// Mail 

// Route::get('/send-mail',[MailController::class,'sendMail']);


require __DIR__.'/auth.php';
