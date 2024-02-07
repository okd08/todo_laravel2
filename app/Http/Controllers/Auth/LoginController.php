<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |------------------------------------------------------------------
    | Login Controller
    |------------------------------------------------------------------
    | このコントローラは、アプリケーションのユーザ認証と、ホーム画面へのリダイレクトを行います。
    | このコントローラは、アプリケーションに便利に機能を提供するために trait を使用します。
    */

    use AuthenticatesUsers;

    /**
     * ログイン後のリダイレクト先
     *
     * @var string
     */
    // デフォルトのhome画面ではなく、タスク一覧画面に遷移するように変更
    protected $redirectTo = '/tasks';

    /**
     * 新しいコントローラインスタンスを作成します。
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
