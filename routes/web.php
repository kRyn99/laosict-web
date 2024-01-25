<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//mới nhưng chỉ làm demo
//phần name đặt theo cú pháp [tên thư mục].[tên file] để dễ tìm tới file tương ứng
//(ví dụ routing cho file feedback.blade.php ở thư mục frontend thì đặt name là frontend.feedback)


Route::get('programming-fundamentals','App\Http\Controllers\CourseController@programmingFundamentalsCourse')->name('frontend.programming-fundamentals');
Route::get('graphic-design','App\Http\Controllers\CourseController@graphicDesignCourse')->name('frontend.graphic-design');
//===============================
Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('frontend.index');
Route::get('home', 'App\Http\Controllers\FrontendController@index')->name('frontend.index');
Route::get('feedback', 'App\Http\Controllers\FrontendController@feedback')->name('frontend.feedback');
Route::get('privacy', 'App\Http\Controllers\FrontendController@privacy')->name('frontend.privacy');
Route::get('doi-tac-dong-hanh', 'App\Http\Controllers\FrontendController@partner')->name('frontend.partner');
Route::post('ajaxLoadPost', 'App\Http\Controllers\FrontendController@ajaxLoadPost')->name('frontend.load_post');
Route::post('ajaxLoadMoreProject', 'App\Http\Controllers\FrontendController@ajaxLoadMoreProject')->name('frontend.load_more_project');
Route::post('ajaxLoadMorePost', 'App\Http\Controllers\FrontendController@ajaxLoadMorePost')->name('frontend.load_more_post');
Route::post('ajaxLoadMoreHaoTam', 'App\Http\Controllers\FrontendController@ajaxLoadMoreHaoTam')->name('frontend.load_more_hao_tam');
Route::post('feedbackPost', 'App\Http\Controllers\FrontendController@feedbackPost')->name('frontend.post_feedback');
Route::post('ajaxDonate', 'App\Http\Controllers\FrontendController@donate')->name('frontend.ajax_donate');
Route::post('ajaxSetLang', 'App\Http\Controllers\FrontendController@ajaxSetLang')->name('frontend.ajax_set_lang');
Route::post('ajaxLoadDistrict', 'App\Http\Controllers\FrontendController@ajaxLoadDistrict')->name('frontend.ajax_load_district');
Route::get('callback', 'App\Http\Controllers\FrontendController@callback')->name('frontend.callback');

Route::get('post/{value}', 'App\Http\Controllers\FrontendController@postDetail')->name('frontend.post_detail');
Route::get('chi-tiet-doi-tac-dong-hanh/{value}', 'App\Http\Controllers\FrontendController@partnerDetail')->name('frontend.partner_detail');

Route::get('lang/{value}', 'App\Http\Controllers\FrontendController@setLang')->name('frontend.set_lang');


Route::get('{value}', 'App\Http\Controllers\FrontendController@main')->name('frontend.main');

