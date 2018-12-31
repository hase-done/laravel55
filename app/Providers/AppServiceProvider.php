<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // mysqlのインデックスサイズに767byteまでしかつかえない問題
        // https://blog.e2info.co.jp/2017/04/17/mysql%E3%81%AE%E3%82%A4%E3%83%B3%E3%83%87%E3%83%83%E3%82%AF%E3%82%B9%E3%82%B5%E3%82%A4%E3%82%BA%E3%81%AB767byte%E3%81%BE%E3%81%A7%E3%81%97%E3%81%8B%E3%81%A4%E3%81%8B%E3%81%88%E3%81%AA%E3%81%84/
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
