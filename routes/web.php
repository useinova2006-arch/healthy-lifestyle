<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\FileController;

Route::post('/upload', [FileController::class, 'upload'])->name('upload');
Route::post('/send-email', [FileController::class, 'sendEmail']);

Route::get('/', function () {
    $news = DB::table('news')->latest()->get();
    $tips = DB::table('tips')->latest()->get();
    return view('home', compact('news', 'tips'));
});

Route::get('/nutrition', fn() => view('nutrition'));
Route::get('/activity', fn() => view('activity'));

Route::middleware(['auth'])->group(function () {

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', fn() => view('admin'));

        Route::delete('/admin/user/{id}', function ($id) {
            User::findOrFail($id)->delete();
            return back();
        })->name('admin.delete.user');
    });

    Route::middleware(['role:editor,admin'])->group(function () {
        Route::get('/manage-news', fn() => view('manage-news'));

        Route::post('/manage-news', function (Request $request) {
            DB::table('news')->insert([
                'title' => $request->title,
                'category' => $request->category,
                'content' => $request->content
            ]);

            return back()->with('success', 'News published!');
        })->name('news.store');
    });

    Route::middleware(['role:expert,admin'])->group(function () {
        Route::get('/edit-tips', fn() => view('edit-tips'));

        Route::post('/edit-tips', function (Request $request) {
            DB::table('tips')->insert([
                'topic' => $request->topic,
                'content' => $request->content
            ]);

            return back()->with('success', 'Tip published!');
        })->name('tips.store');
    });
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::post('/register', [AuthController::class, 'handleRegister']);