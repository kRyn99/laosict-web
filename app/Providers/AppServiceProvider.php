<?php

namespace App\Providers;

use App\Helpers;
use App\Models\LanguageCustom;
use App\Models\Program;
use App\Observers\LanguageCustomObserver;
use App\Observers\ProgramObserver;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
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
        Program::observe(ProgramObserver::class);
        LanguageCustom::observe(LanguageCustomObserver::class);
        \URL::forceScheme('https');
//        DB::listen(function($query) {
//            Helpers::log($query->sql);
//            try { } catch (\Exception $e) {
//                Helpers::log(debug_backtrace());
//            }
//
//            Log::info(
//                $query->sql,
//                $query->bindings,
//                $query->time,
//            );
//        });
    }
}
