<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendController extends Controller
{

    public function index()
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

        return view('frontend.index', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function privacy()
    {

    }

    public function feedback()
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $page = 'feedback';
        $settings = Setting::pluck('value', 'key')->all();
        $meta = [];

        $meta['meta_title'] = trans('settings.meta_feedback_title');
        $meta['meta_desc'] = trans('settings.meta_feedback_desc');
        $meta['meta_keywords'] = trans('settings.meta_feedback_keywords');
        $meta['meta_image'] = url($settings['website_logo_header']);
        $meta['meta_url'] = route('frontend.feedback');

        $currentLocale = App::getLocale();

        $banner_pc = url($settings['feedback_banner_pc_'.$currentLocale]);
        $banner_mobile = url($settings['feedback_banner_mobile_'.$currentLocale]);

        return view('frontend.feedback', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function partner()
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $page = 'partner';
        $settings = Setting::pluck('value', 'key')->all();
        $meta = [];

        $meta['meta_title'] = trans('settings.meta_partner_title');
        $meta['meta_desc'] = trans('settings.meta_partner_desc');
        $meta['meta_keywords'] = trans('settings.meta_partner_keywords');
        $meta['meta_image'] = url($settings['website_logo_header']);
        $meta['meta_url'] = route('frontend.partner');

        $currentLocale = App::getLocale();

        $banner_pc = url($settings['partner_banner_pc_'.$currentLocale]);
        $banner_mobile = url($settings['partner_banner_mobile_'.$currentLocale]);

        return view('frontend.partner', compact('page', 'settings', 'banner_pc', 'banner_mobile'))->with($meta);
    }

    public function postDetail($value) {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $settings = Setting::pluck('value', 'key')->all();
        if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {

            $post = Post::findBySlug($matches[1]);
            if ($post) {
                $post->views = (int) $post->views + 1;
                $post->saveQuietly();
                $page = $post->category->identify;
                $meta = [];

                $meta['meta_title'] =  $post->name;
                $meta['meta_desc'] = $post->desc;
                $meta['meta_keywords'] = $post->keywords;
                $meta['meta_image'] = url($post->image);
                $meta['meta_url'] = route('frontend.post_detail', $post->slug.'.html');

                $banner_pc = $banner_mobile = null;

                return view('frontend.post_detail', compact('post',  'page', 'settings', 'banner_mobile', 'banner_pc', ))->with($meta);
            }
        }
        return redirect('/');
    }

    public function partnerDetail($value) {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $partner = Partner::findBySlug($value);
        if ($partner) {
            $page = 'partner';
            $settings = Setting::pluck('value', 'key')->all();
            $meta = [];

            $meta['meta_title'] =  $partner->name;
            $meta['meta_desc'] = $partner->desc;
            $meta['meta_keywords'] = $partner->name;
            $meta['meta_image'] = url($partner->image);
            $meta['meta_url'] = route('frontend.partner_detail', $partner->slug);

            $banner_pc = $banner_mobile = null;

            return view('frontend.partner_detail', compact('partner',  'page', 'settings', 'banner_mobile', 'banner_pc', ))->with($meta);
        }
        return redirect('/');
    }

    public function main($value)
    {

        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $settings = Setting::pluck('value', 'key')->all();
        if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {

            $project = Project::findBySlug($matches[1]);
            if ($project) {
                $project->views = (int) $project->views + 1;
                $project->saveQuietly();
                $page = 'hoan-canh-quyen-gop';
                $meta = [];

                $meta['meta_title'] =  $project->name;
                $meta['meta_desc'] = $project->desc;
                $meta['meta_keywords'] = $project->keywords;
                $meta['meta_image'] = $project->image? url($project->image) : "";
                $meta['meta_url'] = route('frontend.main', $project->slug.'.html');

                $banner_pc = $banner_mobile = null;

                $projectCate = Helpers::findCateByIdentify('hoan-canh-quyen-gop');

                $paymentNumber = null;
                $billNumber = null;
                $amountNumber = null;
                $errorPayment = null;
                if ($paymentId = request()->input('payment_id')) {
                    $payment = Payment::find($paymentId);
                    if ($payment) {
                        if ($payment->status == Helpers::PAYMENT_STATUS_SUCCESS) {
                            $paymentNumber = $payment->payment_number;
                            $billNumber = $payment->bill_number;
                            $amountNumber = number_format($payment->amount);
                        } else {
                            $errorPayment = trans('home.donate_error_msg');
                        }
                    }
                }

                $top10 = Helpers::getTopDonateByProjectId($project->id, "top", 10);

                $new10 = Helpers::getTopDonateByProjectId($project->id, "new", 10);

                return view('frontend.project_detail', compact('project',  'page', 'settings', 'banner_mobile', 'banner_pc', 'projectCate', 'errorPayment', 'paymentNumber', 'amountNumber', 'billNumber', 'top10', 'new10'))->with($meta);
            } else {
                return redirect('/');
            }
        } else {

            $meta = [];
            $category = Category::find(request()->input('id'));

            if ($category) {
                if ($category->identify == 'hoan-canh-quyen-gop') {
                    $childCate = Helpers::findCateByIdentify('vi-tre-em');
                    return redirect(route('frontend.main', $childCate->slug).'?id='.$childCate->id);
                }

                $meta_title = $category->name;
                $meta_desc = $category->desc;
                $meta_keywords = $category->keywords;

                $page = $category->parent_id ? $category->parent->identify : $category->identify;

                $meta['meta_title'] = $meta_title;
                $meta['meta_desc'] = $meta_desc;
                $meta['meta_keywords'] = $meta_keywords;
                $meta['meta_image'] = url($settings['website_logo_header']);
                $meta['meta_url'] = route('frontend.main', $category->slug).'?id='.$category->id;

                $banner_pc = $category->banner_image_pc;
                $banner_mobile = $category->banner_image_mobile;

                $subPageId = $category->id;

                if ($category->parent_id) {
                    return view('frontend.project', compact('category', 'page', 'settings', 'banner_pc', 'banner_mobile', 'subPageId'))->with($meta);
                }
                return view('frontend.category', compact('category', 'page', 'settings', 'banner_pc', 'banner_mobile', 'subPageId'))->with($meta);
            } else {
                redirect('/');
            }
        }
    }

    public function ajaxLoadPost(Request $request): \Illuminate\Http\JsonResponse
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        $postId = $request->input('post_id');

        if (!$postId) {
            return response()->json(['error' => 1]);
        }
        $post = Post::find($postId);
        $html = view('frontend.partials.ajax_post_in_modal', compact('post'))->render();
        return $html? response()->json(['html' => $html]) : response()->json(['error' => 1]);
    }
    public function setLang($value)
    {
        session()->put('locale', $value);
        return redirect('/');
    }

    public function ajaxLoadDistrict(Request $request)
    {
        $provinceId = $request->input('province_id');
        return response()->json(['districts' => District::where('province_id', $provinceId)->select('id', 'district_name')->get()->toArray()]);
    }

    public function feedbackPost(Request $request)
    {
        Feedback::create($request->all());
        return redirect('/');
    }

    public function donate(Request $request)
    {
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $projectId = $request->input('project_id');
        $callbackUrl = "";
        try {
            list($errorMsg, $callbackUrl) = Helpers::uniPayGetPaymentUrl($projectId, $amount, $phone);
        } catch (\Exception $exception) {
            $errorMsg = "Have error when Donate". $exception->getMessage();
        }

        if ($errorMsg) {
            return response()->json([
                'success' => "0",
                'data' => $errorMsg
            ]);
        } else {
            return response()->json([
                'success' => "1",
                'data' => $callbackUrl
            ]);
        }
    }

    public function callback(Request $request)
    {
        //return response()->json($request->all());
        $paymentId = $request->input('payment_id');


        if (!$paymentId) {
            Helpers::log("No payment ID ".$paymentId);
            return redirect('/');
        }
        $payment = Payment::find($paymentId);
        if (!$payment) {
            Helpers::log("No payment ID ".$paymentId);
            return redirect('/');
        }
        // check payment status
        if ($payment->status == Helpers::PAYMENT_STATUS_ERROR || $payment->status == Helpers::PAYMENT_STATUS_SUCCESS) {
            Helpers::log("Already processed ".$paymentId);
            return redirect('/');
        }

        // gọi api xác thực
        Helpers::verifyPayment($payment);
        // display popup result
        return redirect(route('frontend.main', $payment->project->slug.'.html').'?payment_id='.$payment->id);
    }

    public function ajaxLoadMoreProject(Request $request): \Illuminate\Http\JsonResponse
    {
        $start = $request->input('start');
        $categoryId = $request->input('cate');
        $donationType = $request->input('donationType');

        if (!$start) {
            return response()->json(['error' => 1]);
        }
        $end = $start+6;
        if ($categoryId) {
            $html = view('frontend.partials.load_more_project', compact('start', 'end', 'categoryId'))->render();
        } else {
            $html = view('frontend.partials.load_more_project_donation_type', compact('start', 'end', 'donationType'))->render();
        }

        return $html? response()->json(['html' => $html]) : response()->json(['error' => 1]);
    }

    public function ajaxLoadMorePost(Request $request): \Illuminate\Http\JsonResponse
    {
        $skip = $request->input('start');

        if (!$skip) {
            return response()->json(['error' => 1]);
        }
        $html = view('frontend.partials.load_more_post', compact('skip'))->render();


        return $html? response()->json(['html' => $html]) : response()->json(['error' => 1]);
    }

    public function ajaxSetLang(Request $request): \Illuminate\Http\JsonResponse
    {
        $lang = $request->input('lang');
        session()->put('locale', $lang);
        return response()->json(['success' => "1"]);
    }

    public function ajaxLoadMoreHaoTam(Request $request): \Illuminate\Http\JsonResponse
    {
        $type = $request->input('type');
        $projectId = $request->input('project_id');

        $project = Project::find($projectId);
        $html = null;
        if ($type == 'top') {
            $topHaotam = Helpers::getTopDonateByProjectId($projectId, 'top', 100);
            $html = view('frontend.partials.content_top_hao_tam', compact('topHaotam', 'project'))->render();
        }

        if ($type == 'new') {
            $newHaotam = Helpers::getTopDonateByProjectId($projectId, 'new', 100);
            $html = view('frontend.partials.content_new_hao_tam', compact('newHaotam', 'project'))->render();
        }
        return response()->json(['html' => $html]);
    }
}
