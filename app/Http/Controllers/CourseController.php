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
use App\Http\Requests\FeedbackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
class CourseController extends Controller
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Feedback::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/feedback');
        CRUD::setEntityNameStrings(trans('app.feedback'), trans('app.feedback'));
        CRUD::denyAccess('create');
        CRUD::denyAccess('delete');
        CRUD::denyAccess('update');
    }
    protected function setupShowOperation()
    {
        CRUD::column('name')->label('Họ tên');
        CRUD::column('phone')->label('Số điện thoại');
        CRUD::column('email')->label('Email');
        CRUD::column('address')->label('Địa chỉ')->limit(2000);
        CRUD::column('province_name')->label('Tỉnh/Thành');
        CRUD::column('district_name')->label('Quận/Huyện');
        CRUD::column('message')->label('Nội dung góp ý')->limit(2000);
        CRUD::column('created_at')->type('date')->label('Thời gian');
    }
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Họ tên');
        CRUD::column('phone')->label('Số điện thoại');
        CRUD::column('email')->label('Email');
        CRUD::column('address')->label('Địa chỉ');
        CRUD::column('province_name')->label('Tỉnh/Thành');
        CRUD::column('district_name')->label('Quận/Huyện');
        CRUD::column('message')->label('Nội dung góp ý');
        CRUD::column('created_at')->type('date')->label('Thời gian');
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FeedbackRequest::class);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

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
}
