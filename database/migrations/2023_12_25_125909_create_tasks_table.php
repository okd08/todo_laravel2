<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * マイグレーションを実行する
     */
    public function up(): void
    {
        // 「tasks」という名前のテーブルを作る
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id'); //タスクのid
            $table->integer('user_id')->unsigned()->index(); //タスクを登録したuserのid(usersテーブルから取得)
            $table->string('name'); // タスク名
            $table->timestamps(); // created_atとupdated_at
        });
    }



    /**
     * マイグレーションを逆戻りさせる
     */
    public function down(): void
    {
        // 「tasks」という名前のテーブルを削除する
        Schema::dropIfExists('tasks');
    }
};
