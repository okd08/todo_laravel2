<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |---------------------------------------------------------
    | Application Name
    |---------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |---------------------------------------------------------
    | Application Environment
    |---------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |---------------------------------------------------------
    | Application Debug Mode
    |---------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |---------------------------------------------------------
    | Application URL
    |---------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |---------------------------------------------------------
    | アプリケーションタイムゾーン
    |---------------------------------------------------------
    | PHP の日付・時刻関数が使用するアプリケーションのデフォルトのタイムゾーンを指定します。
    | ここでは、アプリケーションのデフォルトのタイムゾーンを指定します。
    */

    'timezone' => 'Asia/Tokyo',

    /*
    |---------------------------------------------------------
    | アプリケーションロケールの設定
    |---------------------------------------------------------
    | アプリケーションロケールは、翻訳サービスプロバイダによって使用されるデフォルトのロケールを決定します。
    | この値は、アプリケーションでサポートされるロケールのどれかに自由に設定できます。
    */

    'locale' => 'ja',

    /*
    |---------------------------------------------------------
    | アプリケーションフォールバックロケール
    | (jaが使用できない際に使用される言語)
    |---------------------------------------------------------
    | フォールバックロケールは現在のロケールが使用できない場合に使用するロケールを決定します。
    | アプリケーションを通して提供される言語フォルダのどれかに対応するように値を変更することができます。
    */

    'fallback_locale' => 'en',

    /*
    |---------------------------------------------------------
    | フェイカー・ロケール
    |---------------------------------------------------------
    | このロケールは、Faker PHP ライブラリがデータベースシード用の 偽データを生成する際に使用します。
    | たとえば、ローカライズされた電話番号や住所情報などを取得する際に使用されます。
    */

    'faker_locale' => 'ja_JP',

    /*
    |---------------------------------------------------------
    | Encryption Key
    |---------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |---------------------------------------------------------
    | Maintenance Mode Driver
    |---------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    /*
    |---------------------------------------------------------
    | Autoloaded Service Providers
    |---------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
    |---------------------------------------------------------
    | Class Aliases
    |---------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
