<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers;
use App\Models\Category;
use App\Models\District;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Post;
use App\Models\Project;
use App\Models\Province;
use Backpack\Settings\app\Models\Setting;
use Doctrine\DBAL\Driver\Exception;
use Illuminate\Support\Facades\App;
class CourseController extends Controller
{
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
        $banner_pc = url($settings['index_banner_pc_'.$currentLocale]);
        $banner_mobile = url($settings['index_banner_mobile_'.$currentLocale]);

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
        $banner_pc = url($settings['index_banner_pc_'.$currentLocale]);
        $banner_mobile = url($settings['index_banner_mobile_'.$currentLocale]);

        return view('frontend.graphic-design', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

}
