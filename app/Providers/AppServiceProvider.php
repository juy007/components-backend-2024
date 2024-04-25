<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // Contoh variabel global dengan nilai tertentu
        View::share('namaVariabel', 'nilaiVariabel');

        // Anda juga dapat menggunakan logika bisnis untuk menentukan nilai variabel global
        $nilaiDinamis = 'http://127.0.0.1:8000/';// logika bisnis untuk menentukan nilai variabel;
        View::share('domain_master', $nilaiDinamis);
    }
}
