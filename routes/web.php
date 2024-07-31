<?php
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {return view('welcome');})->name('home');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/blog', [AuthManager::class, 'blog'])->name('blog');
Route::post('/blog', [AuthManager::class, 'blogPost'])->name('blog.post');
Route::get('/search', [AuthManager::class, 'search'])->name('search');
Route::post('/search', [AuthManager::class, 'searchPost'])->name('search.post');
Route::get('/jsr', [AuthManager::class, 'jsr'])->name('jsr');
Route::post('/jsr', [AuthManager::class, 'jsrPost'])->name('jsr.post');
Route::get('/jpr', [AuthManager::class, 'jpr'])->name('jpr');
Route::post('/jpr', [AuthManager::class, 'jprPost'])->name('jpr.post');
Route::get('/job', [AuthManager::class, 'job'])->name('job');
Route::post('/job', [AuthManager::class, 'jobPost'])->name('job.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/show-posts', [AuthManager::class, 'showPosts'])->name('show.posts');
