<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // form入力値からのレコード作成を許可する項目
    protected $fillable = [
        'name',
    ];

    //リレーション(taskに紐づいたuserのデータを $task->user で取得できるようにする)
    public function user() {

        // task1件に対してuserは一人
        return $this->belongsTo(User::class);
    }
}
