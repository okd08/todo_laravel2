<?php
// 各ページにアクセスがあった際に、どのbladeやcontrollerを呼び出すか指定する役割

// 認証機能を使用
use Illuminate\Support\Facades\Route;

// TaskControllerを使用
use App\Http\Controllers\TaskController;

/*
|-------------------------------------------------------------
| Webルート
|-------------------------------------------------------------
| ここでは、アプリケーションのWebルートを登録できます。
| これらのルートはRouteServiceProviderによってロードされ、すべて "web "ミドルウェアグループに割り当てられます。
| 素晴らしいものを作ってください！
*/


// URL末尾に何もない場合はwelcome.bladeを表示
Route::get('/', function () {
    return view('welcome');
});


//////// task一覧を表示 ///////
// 「/tasks」にアクセスがあった場合はTaskControllerのindexを実行
Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks');


//////// taskを追加 ///////
Route::post('/task', [TaskController::class, 'store'])
    ->name('task');


//////// taskを削除 ///////
Route::delete('/task/{task}', [TaskController::class, 'destroy'])
    ->name('/task/{task}');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
