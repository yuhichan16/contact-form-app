<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagController;
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

// フォーム入力
Route::get('/contact', [ContactController::class, 'index'])->name('index');
// フォーム確認
Route::post('/contacts/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');
// データ送信
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/contacts', [ContactController::class, 'store']);
// データ修正
Route::post('/contacts/back', [ContactController::class, 'back'])->name('contact.back');
// thanks完了
Route::get('/contacts/thanks', [ContactController::class, 'thanks'])->name('contacts.thanks');

Route::middleware('admin')->group(function () {
    // 管理画面
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin', [AdminController::class, 'store']);
    // タグ追加
    Route::post('/admin/tags', [TagController::class, 'store'])->name('tags');
    // タグ編集
    Route::get('/admin/tags/{tag}/edit', [TagController::class, 'edit'])->name('edit');
    // タグ更新
    Route::put('/admin/tags/{tag}', [TagController::class, 'update'])->name('update');
    // タグ削除
    Route::delete('/admin/tags/{tag}', [TagController::class, 'destroy']);
    // 問い合わせ詳細
    Route::get('/admin/contacts/{contact}', [AdminController::class, 'show'])->name('admin.contacts.show');
    // 問い合わせ削除
    Route::delete('/admin/contacts/{contact}', [AdminController::class, 'destroy'])->name('destroy');

});
