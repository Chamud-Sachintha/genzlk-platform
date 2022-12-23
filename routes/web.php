<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SocialMediaController;

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

Route::get('/', [PostsController::class, 'showHomePage']);

Route::get('/signin', [AdminController::class, 'showLoginPage']);

Route::post('/auth', [AdminController::class, 'authenticateAdmin']);

Route::get('/app', [AdminController::class, 'showAdminPanelToAdmin']);

Route::get('/app/posts', [PostsController::class, 'showPostsPage']);

Route::get('/app/add_post', [PostsController::class, 'showAddPostPage']);

Route::get('/app/category', [CategoryController::class, 'showCategoryPage']);

Route::post('/createCategory', [CategoryController::class, 'createNewCategory']);

Route::post('/createPost', [PostsController::class, 'createNewPost']);

Route::get('/app/post/manage/{postId}', [PostsController::class, 'showUpdatePostPage']);

Route::post('/updatePost', [PostsController::class, 'updatePostByPostId']);

Route::get('/post/{postId}', [PostsController::class, 'showPostInPage']);

Route::get('/app/users/add', [AdminController::class, 'showAddUsersPage']);

Route::post('/updateCategory', [CategoryController::class, 'updateCatgeoryDetailsByCategoryId']);

Route::post('/createUser', [AdminController::class, 'addNewUserDetails']);

Route::post('/addSocialMedia', [SocialMediaController::class, 'addNewScocialMediaLinks']);

Route::get('posts/byCategory/{cat_id}', [PostsController::class, 'showSelectedCetgory']);

Route::get('/app/post/delete/{post_id}', [PostsController::class, 'deleteSelectedPostById']);

Route::get('/deleteCategory/{cat_id}', [CategoryController::class, 'deleteSelectedCategoryById']);