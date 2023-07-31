<?php
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->post('/newPost', [PostController::class, 'createPost']);

Route::get('/home', function () {
    
    return view('home');
});



// Route for handling user registration
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
//Route::post('/home/verify-token', [HomeController::class, 'verifyToken'])->middleware('auth');
Route::middleware('auth')->get('/user-data', [UserController::class, 'getUserData']);
Route::get('/posts', [PostController::class, 'getPosts']);
Route::get('/viewComments/{post_id}', [CommentController::class, 'viewComments']);
Route::post('/addComment/{postId}', [CommentController::class, 'createComment']);
Route::post('/logout', [UserController::class, 'logout']);