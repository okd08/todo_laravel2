{{-- layoutsフォルダの中のappファイル(共通部分)を継承 --}}
@extends('layouts.app')


{{-- @yieldで呼び出される部分 --}}
@section('content')

<!-- タスク登録エリア -->
<div class="panel-body">
    <!-- バリデーションエラー時のファイルを読み込み -->
    @include('common.errors')

    <!-- タスク入力フォーム -->
    <form method="post" action="{{ route('task') }}" class="form-horizontal">

        {{-- CSRF対策 --}}
        @csrf

        <!-- タスク名入力 -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">タスク名</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>

        <!-- タスク追加ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> タスク追加
                </button>
            </div>
        </div>
    </form>
</div>

<!-- タスク一覧表示 -->
@if (count($tasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            タスク一覧
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                    <th>タスク</th>
                    <th>&nbsp;</th>
                </thead>

                <!-- テーブル本体 -->
                <tbody>
                    {{-- controllerから受け取った$tasksから全て呼び出し) --}}
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- タスク名 -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                <!-- 削除ボタン -->
                                <form action="{{ url('task/'.$task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

{{-- @yieldで呼び出される部分、終 --}}
@endsection
