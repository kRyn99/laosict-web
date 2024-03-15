<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Post;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Category;
use App\Models\District;
use App\Models\Feedback;
use App\Models\Province;
use App\Models\Register;
use Illuminate\Http\Request;
use Doctrine\DBAL\Driver\Exception;
use Illuminate\Support\Facades\App;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Support\Facades\Session;
use Backpack\Settings\app\Models\Setting;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class CourseController extends Controller
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;




    public function programmingFundamentalsCourse()
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $page = 'index';
        $settings = Setting::pluck('value', 'key')->all();

        $meta = [];
        $meta['meta_title'] = trans('settings.meta_index_title');
        $meta['meta_desc'] = trans('settings.meta_index_desc');
        $meta['meta_keywords'] = trans('settings.meta_index_keywords');
        $meta['meta_image'] = url($settings['website_logo_header']);
        $meta['meta_url'] = url('/');

        $currentLocale = App::getLocale();
        $banner_pc = url($settings['index_banner_pc_' . $currentLocale]);
        $banner_mobile = url($settings['index_banner_mobile_' . $currentLocale]);

        return view('frontend.programming-fundamentals', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function graphic_design_post(Request $request)
    {   if (session()->has('locale')) {
        App::setLocale(session()->get('locale'));
    }
    $page = 'index';
    $settings = Setting::pluck('value', 'key')->all();

    $meta = [];
    $meta['meta_title'] = trans('settings.meta_index_title');
    $meta['meta_desc'] = trans('settings.meta_index_desc');
    $meta['meta_keywords'] = trans('settings.meta_index_keywords');
    $meta['meta_image'] = url($settings['website_logo_header']);
    $meta['meta_url'] = url('/');

    $currentLocale = App::getLocale();
    $banner_pc = url($settings['index_banner_pc_' . $currentLocale]);
    $banner_mobile = url($settings['index_banner_mobile_' . $currentLocale]);


        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'work' => $request->input('work'),
            'message' => $request->input('message'),
            'course_name' => 'graphic design',
        ];


        Register::create($data);
        Session::flash('success', trans('home.message_register'));
        return view('frontend.graphic-design', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function programming_fundamentalsCourse_post(Request $request)
    {   if (session()->has('locale')) {
        App::setLocale(session()->get('locale'));
    }
    $page = 'index';
    $settings = Setting::pluck('value', 'key')->all();

    $meta = [];
    $meta['meta_title'] = trans('settings.meta_index_title');
    $meta['meta_desc'] = trans('settings.meta_index_desc');
    $meta['meta_keywords'] = trans('settings.meta_index_keywords');
    $meta['meta_image'] = url($settings['website_logo_header']);
    $meta['meta_url'] = url('/');

    $currentLocale = App::getLocale();
    $banner_pc = url($settings['index_banner_pc_' . $currentLocale]);
    $banner_mobile = url($settings['index_banner_mobile_' . $currentLocale]);


        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'work' => $request->input('work'),
            'message' => $request->input('message'),
            'course_name' => 'programming fundamentalscourse',
        ];


        Register::create($data);
        Session::flash('success', trans('home.message_register'));
        return view('frontend.programming-fundamentals', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function graphicDesignCourse()
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $page = 'index';
        $settings = Setting::pluck('value', 'key')->all();

        $meta = [];
        $meta['meta_title'] = trans('settings.meta_index_title');
        $meta['meta_desc'] = trans('settings.meta_index_desc');
        $meta['meta_keywords'] = trans('settings.meta_index_keywords');
        $meta['meta_image'] = url($settings['website_logo_header']);
        $meta['meta_url'] = url('/');

        $currentLocale = App::getLocale();
        $banner_pc = url($settings['index_banner_pc_' . $currentLocale]);
        $banner_mobile = url($settings['index_banner_mobile_' . $currentLocale]);



        return view('frontend.graphic-design', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function microsoftOffice()
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $page = 'index';
        $settings = Setting::pluck('value', 'key')->all();

        $meta = [];
        $meta['meta_title'] = trans('settings.meta_index_title');
        $meta['meta_desc'] = trans('settings.meta_index_desc');
        $meta['meta_keywords'] = trans('settings.meta_index_keywords');
        $meta['meta_image'] = url($settings['website_logo_header']);
        $meta['meta_url'] = url('/');

        $currentLocale = App::getLocale();
        $banner_pc = url($settings['index_banner_pc_' . $currentLocale]);
        $banner_mobile = url($settings['index_banner_mobile_' . $currentLocale]);



        return view('frontend.microsoft-office', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }
}
