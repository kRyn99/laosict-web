<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use Illuminate\Support\Facades\App;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('program-type', 'ProgramTypeCrudController');
    Route::crud('partner', 'PartnerCrudController');
    Route::crud('program', 'ProgramCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('feedback', 'FeedbackCrudController');
    Route::crud('registers', 'RegisterCrudController');
    Route::crud('payment', 'PaymentCrudController');
    Route::get('lang/{value}', function ($value){
        App::setLocale($value);
        session()->put('applocale',  $value);
        return redirect()->back();
    });
    Route::crud('project-type', 'ProjectTypeCrudController');
    Route::crud('custom-setting', 'CustomSettingCrudController');
    Route::crud('province', 'ProvinceCrudController');
    Route::crud('district', 'DistrictCrudController');
    Route::crud('language-line', 'LanguageLineCrudController');
    Route::get('language-line/reloadLanguages', 'LanguageLineCrudController@reloadLanguages');
    Route::crud('teacher', 'TeacherCrudController');
    Route::crud('course', 'CourseCrudController');
}); // this should be the absolute last line of this file