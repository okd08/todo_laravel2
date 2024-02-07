<?php
// DBにアクセスしてデータを取得、編集する役割

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Taskモデルを使用
use App\Models\Task;
use App\Repositories\TaskRepository;



class TaskController extends Controller
{

    /**
    * タスクリポジトリ
    *
    * @var TaskRepository
    */
    protected $tasks;

    /**
    * コンストラクタ
    *
    * @return void
    */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }


    ///////////////////////////////////////////////////
    // ログイン中のuserのtasksを取得して一覧を表示する
    //////////////////////////////////////////////////
    // Request型の$request→formからpostで送信されたデータを受け取る変数
    public function index(Request $request) {
            // Taskモデルから全てのレコードを取得し、変数に代入
            // $tasks = Task::latest()->get();
            // ログイン中のuserのtasks全てを取得
            // $tasks = $request->user()->tasks()->get();

        // tasksフォルダの中のindex.bladeを表示($tasksも一緒に渡す)
        return view('tasks.index')
            ->with('tasks', $this->tasks->forUser($request->user()));

    }


    //////////////////////////////////////////////////////
    // postされたtaskをログイン中のuserのカラムに保存する
    //////////////////////////////////////////////////////
    public function store(Request $request) {

        // post値をバリデーション
        $this->validate($request, [
            // 入力必須かつ255文字以内
            'name' => 'required|max:255',
        ]);


        // ログイン中のuserのTaskテーブルにレコードを作成
            // Task::create([
            //     'user_id' => 0,
            //     'name' => $request->name,
            // ]);
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        // 作成したらtask一覧画面に戻る
        return redirect()
            ->route('tasks');

    }


    ///////////////////////////////////////
    // ログイン中のuserのtask1件を削除する
    ///////////////////////////////////////
    // Task型の$task→URLから受け取ったidに対応するレコードのデータが入る変数
    public function destroy(Request $request, Task $task) {

        // $taskからデータを削除(DBからも削除)
        $task->delete();

        // 削除したらtask一覧画面に戻る
        return redirect()
            ->route('tasks');

    }
}
