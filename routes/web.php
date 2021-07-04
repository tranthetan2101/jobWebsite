<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\FindJobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryBlogController;

Route::middleware('admin')->get('admin/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('admin/dashboard');
Route::GET('/findjob', [FindJobController::class, 'index']);
Route::GET('/', [HomeController::class, 'index']);
Route::middleware('admin')->group(function () {
    Route::GET('/create-post', function () {
        return view('pages.admin.add-post');
    });
    Route::GET('/create-post', function () {
        return view('pages.admin.add-post');
    });
    Route::POST('admin/create-post/add', [PostController::class, 'store']);
    Route::GET('admin/list-post', function () {
        return view('pages.admin.list-post');
    });
    Route::GET('/admin/list-cate', function () {
        return view('pages.admin.list-category');
    });
    Route::GET('/admin/list-cateblog', function () {
        return view('pages.admin.list-category-blog');
    });

    Route::GET('admin/list-blog', function () {
        return view('pages.admin.list-blog');
    });
    Route::GET('admin/list-blog',[BlogController::class,'getBlogAdmin']);

    Route::GET('/admin/edit-post/{id}', [PostController::class, 'edit']);
    Route::PATCH('/admin/update/{id}', [PostController::class, 'update']);
    Route::DELETE('/admin/delete-post/{id}', [PostController::class, 'destroy']);
    Route::GET('/show/post/{id}', [PostController::class, 'show']);
    Route::GET('/admin/create-cate', function () {
        return view('pages.admin.add-cate');
    });
    Route::POST('/admin/category/add', [CategoryController::class, 'store']);
    Route::GET('/admin/edit-cate/{id}', [CategoryController::class, 'edit']);
    Route::PATCH('/admin/update-cate/{id}', [CategoryController::class, 'update']);
    Route::DELETE('/admin/delete-cate/{id}', [CategoryController::class, 'destroy']);

    Route::POST('/admin/categoryblog/add', [CategoryBlogController::class, 'store']);
    Route::GET('/admin/edit-cateblog/{id}', [CategoryBlogController::class, 'edit']);
    Route::DELETE('/admin/delete-cateblog/{id}', [CategoryBlogController::class, 'destroy']);
    Route::PATCH('/admin/update-cateblog/{id}', [CategoryBlogController::class, 'update']);
    Route::GET('/admin/create-cateblog', function () {
        return view('layouts.admin.create-cateblog');
    });

    // Role
    Route::GET('/admin/list-role', [RoleController::class, 'index']);
    Route::GET('/admin/create-role', function () {
        return view('layouts.admin.create-role');
    });
    Route::POST('/admin/role/add', [RoleController::class, 'store']);
    Route::GET('/admin/edit-role/{id}', [RoleController::class, 'edit']);
    Route::PATCH('/admin/update-role/{id}', [RoleController::class, 'update']);
    Route::DELETE('/admin/delete-role/{id}', [RoleController::class, 'destroy']);


    //User
    Route::GET('/admin/list-user', function () {
        return view('pages.admin.list-user');
    });
    Route::GET('/admin/create-user', function () {
        return view('layouts.admin.create-user');
    });
    Route::POST('/admin/user/add', [UserController::class, 'store']);
    Route::GET('/admin/edit-user/{id}', [UserController::class, 'edit']);
    Route::PATCH('/admin/update-user/{id}', [UserController::class, 'update']);
    Route::DELETE('/admin/delete-user/{id}', [UserController::class, 'destroy']);

    //blog
    Route::GET('/admin/create-blog', function () {
        return view('pages.admin.add-blog');
    });
});

//search
Route::GET('/search', [PostController::class, 'search']);
//xem thông tin 1 bài post
Route::GET('/post/{id}', [DetailController::class, 'show']);
//nộp cv theo bài viết
Route::GET('/up_cv/post/{id_post}', [CVController::class, 'getidCV']);
Route::POST('/up_cv/post/add', [CVController::class, 'addCV'])->name('upload.handle');
//show post theo danh mục
Route::GET('/cate-show/{id}', [CategoryController::class, 'show']);


Route::POST('/admin/blog/add', [BlogController::class, 'store']);
Route::GET('/blog', [BlogController::class, 'index']);
Route::GET('/blog/{id}', [BlogController::class, 'show']);
Route::POST('images/upload', [BlogController::class, 'uploadImage'])->name('ckeditor.upload');
Route::DELETE('blog/delete/{id}', [BlogController::class, 'destroy']);

//result
Route::GET('/result', function () {
    return view('pages.client.result');
});
