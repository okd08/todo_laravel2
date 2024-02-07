<?php
// DBにアクセスしてデータを取得、編集する役割

namespace App\Repositories;

// Userモデルを使用
use App\Models\User;

class TaskRepository
{
    ///////////////////////////////////////////////////
    // ログイン中のuserのtasksを取得して一覧を表示する
    //////////////////////////////////////////////////
    public function forUser(User $user) {

        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
