<?php
/**
 * Created by PhpStorm.
 * User: tieungao
 * Date: 2020-10-06
 * Time: 17:23
 */

namespace App;

use App\Models\Category;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Post;
use App\Models\Program;
use App\Models\ProgramType;
use App\Models\Project;
use App\Models\ProjectType;
use Backpack\Settings\app\Models\Setting;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use NumberFormatter;
use PHPUnit\Exception;

class Helpers
{

    public const LANGS = [
            'vi',
            'lo',
            'en',
            'zh',
        ];

    public const GROUPS = [
        'app' => "App",
        'home' => "Home",
        'settings' => "Settings",
        'validation' => "Validation"
    ];

    public const USE_GROUPS = [
        'app' => "App",
        'home' => "Home",
        'settings' => "Settings",
    ];

    public const SETTINGS = [
        [
            'key'         => 'trai_tim_voi_vang_image',
            'name'        => 'Image size 489 x 397',
            'description' => 'For SEO',
            'value'       => 'uploads/img-heart.jpg',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'vi_nhan_ai_image',
            'name'        => 'Image size 489 x 397',
            'description' => 'For SEO',
            'value'       => 'uploads/img-pig.jpg',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'charity_video_thumb_image',
            'name'        => 'Video thumb Image size 532 x 413',
            'description' => 'For SEO',
            'value'       => 'uploads/video_thumb.jpg',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'charity_video',
            'name'        => 'Video Charity Block',
            'description' => 'For SEO',
            'value'       => 'uploads/block.mp4',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'website_logo_header',
            'name'        => 'Header Website Logo',
            'description' => 'For SEO',
            'value'       => 'image/logo_laos_center.jpg',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'website_name',
            'name'        => 'Website Name',
            'description' => 'For SEO',
            'value'       => 'LaoApp Funds',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'website_logo_footer',
            'name'        => 'Footer Website Logo',
            'description' => 'For SEO',
            'value'       => 'uploads/logo.webp',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'unitel_link',
            'name'        => 'Footer Unitel Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'web_link',
            'name'        => 'Footer Web Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'facebook_link',
            'name'        => 'Footer Facebook Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'company_tel',
            'name'        => 'Footer Company Tel',
            'description' => 'For SEO',
            'value'       => '021 990196',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_whatsapp',
            'name'        => 'Footer Company Whatsapp',
            'description' => 'For SEO',
            'value'       => '020 97037153',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_email',
            'name'        => 'Footer Company Email',
            'description' => 'For SEO',
            'value'       => 'www.laoapp.la',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_ios_link',
            'name'        => 'Footer App Apple Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_android_link',
            'name'        => 'Footer App Google Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],


        [
            'key'         => 'analytics',
            'name'        => 'Custom Javascript Code',
            'description' => 'For Analytics, Etc..',
            'value'       => '',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],


    ];

    const ADDITION_SETTINGS = [
        [
            'key'         => 'company_whatapp_link',
            'name'        => 'Footer Company WhatsApp Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_wechat_link',
            'name'        => 'Footer Company WeChat Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'wallet_icon_header_menu',
            'name'        => 'Wallet Icon Header Menu',
            'description' => 'For SEO',
            'value'       => 'uploads/wallet_icon.png',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'default_admin_language',
            'name'        => 'Default Admin Language',
            'description' => 'For SEO',
            'value'       => 'vi',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
    ];


    public static function getFlagLang() {
        return [

            'vi' => trans('home.title_flag_vietnamese'),
            'en' => trans('home.title_flag_english'),
            'lo' => trans('home.title_flag_laos'),
            'zh' => trans('home.title_flag_chinese'),
        ];
    }

    const PROGRAM_DONATION_TYPE_MONEY = "money";
    const PROGRAM_DONATION_TYPE_ITEM = "item";

    const PAYMENT_ITEM_BILL_NUMBER = "ITEM_BILL_NUMBER";

    const PROGRAM_DONATION_TYPES = [
        self::PROGRAM_DONATION_TYPE_MONEY => 'Quyên góp bằng tiền',
        self::PROGRAM_DONATION_TYPE_ITEM => 'Quyên góp bằng Hoa',
    ];

    const IDENTIFY_HOAN_CANH_QUYEN_GOP = 'hoan-canh-quyen-gop';

    // trang đầu là trang tổng hợp cả 2 loại.
    const IDENTIFY_FIRST_PAGE_SHOW_TOTAL_STATIC = 'vi-voi-vang';
    // trang thứ 2 là trang tổng hợp tiền
    const IDENTIFY_SECOND_PAGE_SHOW_MONEY_STATIC = 'trai-tim-voi-vang';
    // trang 3 là trang tổng hợp quà tặng
    const IDENTIFY_SECOND_PAGE_SHOW_ITEM_STATIC = 'dat-voi-vang';

    const POST_STATUS_PUBLISHED = 2;
    const POST_STATUS_ACHIEVED = 3;

    const POST_STATUSES = [
        self::POST_STATUS_PUBLISHED => 'Kích hoạt',
        self::POST_STATUS_ACHIEVED => 'Ẩn',
    ];

    const PROJECT_NAME_TRAI_TIM = "trai-tim";
    const PROJECT_NAME_DAT_VOI = "dat-voi";

    const PROJECT_NAMES = [
        self::PROJECT_NAME_TRAI_TIM => 'Trái Tim Voi Vàng',
        self::PROJECT_NAME_DAT_VOI => 'Đất Voi Vàng',
    ];


    const PAYMENT_STATUS_CREATE = 1;
    const PAYMENT_STATUS_SUCCESS = 2;
    const PAYMENT_STATUS_ERROR = 3;


    const PAYMENT_STATUSES = [
        self::PAYMENT_STATUS_CREATE => 'Mới tạo',
        self::PAYMENT_STATUS_SUCCESS => 'Thanh toán thành công',
        self::PAYMENT_STATUS_ERROR => 'Thanh toán thất bại',
    ];

    public static function trimAllSpace($str)
    {
        return preg_replace('/\s+/', '', $str);
    }

    public static function setRequestAmount($amountStr)
    {
        if ($amountStr) {
            $amountStr = str_replace('.', '', $amountStr);
        } else {
            $amountStr = 0;
        }
        return $amountStr;
    }

    public static function log($msg)
    {
        if (is_array($msg)) {
            $message = json_encode($msg, true);
        } else {
            $message = $msg;
        }
        @file_put_contents(storage_path('logs/debug.log'), $message . "\n", FILE_APPEND);
    }

    public static function callApiLoginGetToken()
    {
        $client = new Client(['verify' => false]);
        $headers = [
            'Accept-Language' => 'vi',
            'Content-Type' => 'application/json'
        ];
        $body = json_encode([
            'userName' => 'userNameFunds',
            'password' => '12345678aA@',
        ]);
        $request = new Request('POST', 'https://upoint-uat.uid.com.la/ws-upoint/api/v1/cms/funds-login', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        try {
            $ars = json_decode($res->getBody(), true);
            return $ars['data']['token'] ?? null;
        } catch (Exception $exception) {
            self::log("error when call callApiLogin : ".$exception->getMessage());
        }
        return null;
    }

    // 'get-partner-list'
    // get-program-type-list
    // get-synthesize-volunteer-programs
    public static function callApiGetList($token, $case)
    {
        $client = new Client(['verify' => false]);
        $headers = [
            'Accept-Language' => 'vi',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token
        ];
        $body = json_encode([
            'function' => $case,
        ]);
        $request = new Request('POST', 'https://upoint-uat.uid.com.la/ws-upoint/api/v1/redirect/redirect-function-funds', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        try {
            $ars = json_decode($res->getBody(), true);
            return $ars['data'] ?? [];
        } catch (Exception $exception) {
            self::log("error when call callApiLogin : ".$exception->getMessage());
        }
        return [];
    }

    // get-partner-detail
    // get-program-detail

    public static function callApiGetDetail($token, $case, $sourceId)
    {
        $body = null;
        switch ($case) {
            case "get-partner-detail":
                $body = json_encode([
                    'function' => $case,
                    'partnerDTO' => ['id' => $sourceId]
                ], true);
                break;
            case "get-program-detail":
                $body = json_encode([
                    'function' => $case,
                    'donationDTO' => ['programId' => $sourceId]
                ], true);
                break;
        }
        $client = new Client(['verify' => false]);
        $headers = [
            'Accept-Language' => 'vi',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token
        ];
        $request = new Request('POST', 'https://upoint-uat.uid.com.la/ws-upoint/api/v1/redirect/redirect-function-funds', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        try {
            $ars = json_decode($res->getBody(), true);
            return $ars['data'] ?? [];
        } catch (Exception $exception) {
            self::log("error when call callApiLogin : ".$exception->getMessage());
        }
        return [];
    }


    public static function syncApiData()
    {
        $token = self::callApiLoginGetToken();
        $programTypes = self::callApiGetList($token, 'get-program-type-list');
        //$partnerData = self::callApiGetList($token, 'get-partner-list');
        //dd($programTypes);
        if ($programTypes) {
            foreach ($programTypes as $programType) {
                // find by source_id in database.
                $currentProgramType = ProgramType::where('source_id', $programType['programTypeId'])->first();
                if ($currentProgramType) {
                   continue;
                }
                ProgramType::create([
                    'name' => $programType['programTypeName'],
                    'source_id' => $programType['programTypeId']
                ]);
            }
        }
        $partners = self::callApiGetList($token, 'get-partner-list');
        //dd($partners);
        if ($partners) {
            foreach ($partners as $partner) {
                // find by source_id in database.
                $currentPartner = Partner::where('source_id', $partner['id'])->first();
                if (!$currentPartner) {
                    $ext = substr(strrchr($partner['logo'], '.'), 1);
                    $imageName = 'uploads/'.Str::uuid().".".$ext;
                    $imagePath = public_path($imageName);


                    $ch = curl_init($partner['logo']);
                    $fp = fopen($imagePath, 'wb');
                    curl_setopt($ch, CURLOPT_FILE, $fp);
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_exec($ch);
                    curl_close($ch);
                    fclose($fp);

                    //copy($partner['logo'], $imagePath);
                    $currentPartner = Partner::create([
                        'name' => $partner['name'],
                        'slogan' => $partner['slogan'],
                        'image' => $imageName,
                        'desc' => $partner['description'],
                        'number_of_success_projects' => $partner['numOfProjectSuccessFund'],
                        'total_collect_amount' => $partner['totalAmountRaised'],
                        'total_collect_turn' => $partner['numOfParticipatingDonations'],
                        'source_id',
                    ]);
                }
                if (!$partner['donationDTOList']) {
                    continue;
                }
                foreach ($partner['donationDTOList'] as $program) {
                    $currentProgram = Program::where('source_id', $program['programId'])->first();
                    if (!$currentProgram) {
                        $currentProgramType = ProgramType::where('source_id', $program['programType'])->first();

                        if (!$currentProgramType) {
                           continue;
                        }

                        Program::create([
                            'name' => $program['programName'],
                            'program_type_id' => $currentProgramType->id,
                            'current_collect_amount' => $program['currentDonationAmount'],
                            'total_collect_amount' => $program['totalAmountToDonate'],
                            'total_collect_turn' => $program['totalNumberOfDonation'],
                            'partner_id' => $currentPartner->id,
                            'day_left' => $program['programDuration'],
                            'source_id' => $program['programId'],
                        ]);
                    }

                }

            }
        }
    }

    public static function getCategories()
    {
        return Category::whereNull('parent_id')->orderBy('order', 'asc')->get();
    }

    public static function frontendCatePosts($skip)
    {
        return Post::where('status', self::POST_STATUS_PUBLISHED)
            ->orderBy('created_at', 'asc')
            ->skip($skip)
            ->take(12)
            ->get();
    }

    public static function getTotalPosts()
    {
        return Post::where('status', self::POST_STATUS_PUBLISHED)->count();
    }

    public static function getPosts($page, $category = null)
    {
        if ($page == 'index') {
            return Post::where('status', self::POST_STATUS_PUBLISHED)->orderBy('created_at', 'asc')->limit(12)->get();
        }

        if ($page == 'category' && $category != null) {
            if ($category->identify == 'tin-tuc-cong-dong') {
                return Post::where('status', self::POST_STATUS_PUBLISHED)
                    ->orderBy('created_at', 'asc')
                    ->limit(12)
                    ->get();
            }
            $categoryId = $category->id;
            if ($category->parent_id) {
                $categoryId = $category->parent_id;
            }
            return Post::where('status', self::POST_STATUS_PUBLISHED)
                ->where('category_id', $categoryId)
                ->orderBy('created_at', 'asc')
                ->limit(12)
                ->get();
        }

        return null;

    }

    public static function getPartners($limit=null)
    {
        if ($limit) {
            return Partner::limit($limit)->get()->chunk(3);
        } else {
            return Partner::all()->chunk(3);
        }

    }

    public static function getOtherPartners($partnerId)
    {
        return Partner::where('id', '!=', $partnerId)->limit(12)->get()->chunk(3);

    }

    public static function getProjectTypes()
    {
        return ProjectType::all();

    }

    public static function getIndexProjects($donationType)
    {
        return Project::with('program')
            ->where('status', self::POST_STATUS_PUBLISHED)
            ->whereHas('program', function ($q) use ($donationType) {
                $q->where('donation_type', $donationType);
            })
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }

    public static function frontendIndexProjects($donationType, $limit = 6, $skip = 0)
    {
        return Project::where('status', self::POST_STATUS_PUBLISHED)
            ->whereHas('program', function ($q) use ($donationType) {
                $q->where('donation_type', $donationType);
            })
            ->orderBy('created_at', 'desc')
            ->skip($skip)
            ->take($limit)
            ->get();
    }

    public static function getDisplaySignAmount($donationType)
    {
        return $donationType == self::PROGRAM_DONATION_TYPE_MONEY ? 'LAK' : 'Hoa';
    }

    public static function getPartnerProjects($partnerId)
    {
        $programIds = Program::where('partner_id', $partnerId)->pluck('id')->all();

        return Project::where('status', self::POST_STATUS_PUBLISHED)
            ->whereIn('program_id', $programIds)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }

    public static function getCategoryProjects($category)
    {
        return Project::where('status', self::POST_STATUS_PUBLISHED)
            ->where('category_id', $category->id)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }

    public static function frontendCateProjects($categoryId, $limit = 6, $skip = 0)
    {
        return Project::where('status', self::POST_STATUS_PUBLISHED)
            ->where('category_id', $categoryId)
            ->orderBy('created_at', 'desc')
            ->skip($skip)
            ->take($limit)
            ->get();
    }

    public static function configGet($key): string
    {
        return Setting::get($key);
    }

    public static function getImageUrlBySize($path, $w, $h)
    {
        return url('uploads/'.str_replace('uploads/', '', $path));
    }

    public static function genPostContent()
    {
        $languages = [
            'vi' => 'Vietnamese',
            'en' => 'English',
            'zh' => 'Chinese',
            'lo' => 'Laos'
        ];
        $translatable = [
            'name' => 'Chung tay mang đến phép màu y tế cho 4 cuộc đời nhỏ không may mắn gặp dị tật bẩm sinh',
            'desc' => 'Chung tay mang đến phép màu y tế cho 4 cuộc đời nhỏ không may mắn gặp dị tật bẩm sinh',
            'content' => '<p>Số Heo V&agrave;ng n&agrave;y đ&atilde; được nh&agrave; t&agrave;i trợ Thư Trần quy đổi th&agrave;nh 80 triệu đồng tiền mặt. Ngo&agrave;i ra, huyện Đo&agrave;n địa phương sẽ hỗ trợ 20 triệu đồng. Ng&ocirc;i nh&agrave; sẽ được x&acirc;y dựng tại Tổ 1, Th&ocirc;n Tr&agrave; Bao, Sơn Tr&agrave;, Tr&agrave; Bồng, tỉnh Quảng Ng&atilde;i với diện t&iacute;ch 40m2 gồm 1 ph&ograve;ng kh&aacute;ch v&agrave; 2 ph&ograve;ng ở. Hy vọng với ng&ocirc;i nh&agrave; mới tuy đơn sơ nhưng cực k&igrave; vững ch&atilde;i n&agrave;y sẽ gi&uacute;p em nu&ocirc;i lớn ước mơ học tập th&agrave;nh t&agrave;i.</p>

<p><strong>Ho&agrave;n th&agrave;nh dự &aacute;n:&nbsp;C&ugrave;ng Sức Mạnh 2000 g&oacute;p Heo V&agrave;ng x&acirc;y dựng nh&agrave; hạnh ph&uacute;c cho em Hồ Văn Tỏa mồ c&ocirc;i mẹ</strong></p>

<p><strong>Số Heo V&agrave;ng đ&atilde; g&acirc;y quỹ th&agrave;nh c&ocirc;ng:</strong>&nbsp;1.000.263</p>

<p><strong>Đơn vị triển khai:</strong><a href="https://momo.vn/song-tot/suc-manh-2000">&nbsp;Sức Mạnh 2000</a></p>

<p><strong>Thời gian g&acirc;y quỹ:</strong>&nbsp;17/10/2022</p>

<p><strong>Địa điểm hỗ trợ:</strong>&nbsp;Quảng Ng&atilde;i</p>

<p>C&oacute; thể y&ecirc;n t&acirc;m theo đuổi giấc mơ học h&agrave;nh l&agrave; điều v&ocirc; c&ugrave;ng xa vời đối với em Hồ Văn Tỏa ở th&ocirc;n Tr&agrave; Bao, x&atilde; Sơn Tr&agrave;, huyện Tr&agrave; Bồng, tỉnh Quảng Ng&atilde;i. Em Tỏa sinh năm 2009 hiện đang học lớp 7, trường THCS số 2, Tr&agrave; Phong. Mẹ em mất sớm, n&ecirc;n hiện nay em đang sống c&ugrave;ng anh trai v&agrave; ba l&agrave; Hồ Văn Tiếng. Gia đ&igrave;nh em thuộc diện hộ ngh&egrave;o, ba l&agrave;m nghề n&ocirc;ng, trồng l&uacute;a ở rẫy. Ngo&agrave;i ra, ba em cũng tranh thủ những khi vụ m&ugrave;a chưa bận rộn đi l&agrave;m mướn lấy th&ecirc;m ng&agrave;y c&ocirc;ng, c&oacute; th&ecirc;m ch&uacute;t chi ph&iacute; ra v&agrave;o. D&ugrave; vậy kinh tế gia đ&igrave;nh em vẫn thuộc diện đặc biệt kh&oacute; khăn. Để c&oacute; thể nu&ocirc;i hai con đi tiếp tục đi học, ba em vừa l&agrave;m cha vừa l&agrave;m mẹ để chăm s&oacute;c hai anh em Tỏa kh&ocirc;n lớn. Bao nhi&ecirc;u g&aacute;nh nặng gia đ&igrave;nh đều một m&igrave;nh &ocirc;ng g&aacute;nh v&aacute;c. Thấu hiểu nỗi vất vả của ba, hai anh em Tỏa lu&ocirc;n bảo ban nhau chăm chỉ học tập, v&agrave; phụ gi&uacute;p ba l&agrave;m việc nh&agrave;.&nbsp;</p>

<p>Gia đ&igrave;nh 3 người nh&agrave; em Hồ Văn Tỏa hiện tại c&ugrave;ng sinh sống trong một ng&ocirc;i nh&agrave; được x&acirc;y tạm từ c&aacute;c mảnh gỗ, v&aacute;n &eacute;p. Ch&uacute;ng được chắp v&aacute; tạm với nhau để c&oacute; nơi che mưa chắn nắng cho cả gia đ&igrave;nh. Căn bếp cũng chỉ d&ugrave;ng bằng v&agrave;i ba vi&ecirc;n gạch k&ecirc; l&ecirc;n.&nbsp;</p>',
            'keywords' => 'Chung tay mang đến phép màu y tế cho 4 cuộc đời nhỏ không may mắn gặp dị tật bẩm sinh'
        ];

        DB::table('posts')->truncate();
        $categories = Category::whereNull('parent_id')->get();
        foreach ($categories as $category) {
            // create 20 posts each category.
            for ($i = 0; $i < 2; $i++) {

                $initData = [
                    'category_id' => $category->id,
                    'status' => Helpers::POST_STATUS_PUBLISHED,
                    'image' => 'uploads/imagebaiviet.jpeg',
                ];
                foreach ($translatable as $tran => $value) {
                    $initData[$tran] = $value;
                }
                $post = Post::create($initData);
                foreach ($translatable as $name => $value) {
                    $translations = [];
                    foreach ($languages as $lang => $langName) {
                        $translations[$lang] = $value." ".$langName." ".$i;
                    }
                    $post->setTranslations($name, $translations);
                    $post->save();
                }
            }
        }
    }

    public static function genCategories()
    {
        $languages = [
            'vi' => 'VN',
            'en' => 'EN',
            'zh' => 'CN',
            'lo' => 'LO'
        ];

        $categories = [
            1 => 'Ví voi vàng',
            2 => 'Trái tim voi vàng',
            3 => 'Đất voi vàng',
            4 => 'Hoàn cảnh quyên góp',
            5 => 'Đối tác đồng hành',
            6 => 'Tin tức cộng đồng',
            7 => 'Vì trẻ em',
            8 => 'Người già, người khuyết tật',
            9 => 'Bệnh hiểm nghèo',
            10 => 'Hoàn cảnh khó khăn',
            11 => 'Hỗ trợ giáo dục',
            12 => 'Đầu tư cơ sở vật chất',
            13 => 'Cứu trợ động vật',
            14 => 'Bảo vệ môi trường',
        ];

        $translatable = ['name', 'desc', 'keywords'];


        DB::table('categories')->truncate();

        foreach ($categories as $id => $value) {
            $category = Category::create([
                'name' => "test",
                'banner_image_pc' => 'uploads/demo-banner-pc.jpg',
                'banner_image_mobile' => 'uploads/demo-banner-mobile.jpg',
                'order' => $id
            ]);
            if ($category->id > 6) {
                $category->parent_id = 4;
                $category->save();
            }
            foreach ($translatable as $name) {
                $translations = [];
                foreach ($languages as $lang => $langName) {
                    $translations[$lang] = $value." ".$langName;
                }
                $category->setTranslations($name, $translations);
                $category->save();
            }
        }
    }

    public static function genProjects()
    {
        $languages = [
            'vi' => 'Vietnamese',
            'en' => 'English',
            'zh' => 'Chinese',
            'lo' => 'Laos'
        ];
        $translatable = [
            'name' => 'Chung tay mang đến phép màu y tế cho 4 cuộc đời nhỏ không may mắn gặp dị tật bẩm sinh',
            'desc' => 'Chung tay mang đến phép màu y tế cho 4 cuộc đời nhỏ không may mắn gặp dị tật bẩm sinh',
            'hoan_canh' => '<p>Số Heo V&agrave;ng n&agrave;y đ&atilde; được nh&agrave; t&agrave;i trợ Thư Trần quy đổi th&agrave;nh 80 triệu đồng tiền mặt. Ngo&agrave;i ra, huyện Đo&agrave;n địa phương sẽ hỗ trợ 20 triệu đồng. Ng&ocirc;i nh&agrave; sẽ được x&acirc;y dựng tại Tổ 1, Th&ocirc;n Tr&agrave; Bao, Sơn Tr&agrave;, Tr&agrave; Bồng, tỉnh Quảng Ng&atilde;i với diện t&iacute;ch 40m2 gồm 1 ph&ograve;ng kh&aacute;ch v&agrave; 2 ph&ograve;ng ở. Hy vọng với ng&ocirc;i nh&agrave; mới tuy đơn sơ nhưng cực k&igrave; vững ch&atilde;i n&agrave;y sẽ gi&uacute;p em nu&ocirc;i lớn ước mơ học tập th&agrave;nh t&agrave;i.</p>

<p><strong>Ho&agrave;n th&agrave;nh dự &aacute;n:&nbsp;C&ugrave;ng Sức Mạnh 2000 g&oacute;p Heo V&agrave;ng x&acirc;y dựng nh&agrave; hạnh ph&uacute;c cho em Hồ Văn Tỏa mồ c&ocirc;i mẹ</strong></p>

<p><strong>Số Heo V&agrave;ng đ&atilde; g&acirc;y quỹ th&agrave;nh c&ocirc;ng:</strong>&nbsp;1.000.263</p>

<p><strong>Đơn vị triển khai:</strong><a href="https://momo.vn/song-tot/suc-manh-2000">&nbsp;Sức Mạnh 2000</a></p>

<p><strong>Thời gian g&acirc;y quỹ:</strong>&nbsp;17/10/2022</p>

<p><strong>Địa điểm hỗ trợ:</strong>&nbsp;Quảng Ng&atilde;i</p>

<p>C&oacute; thể y&ecirc;n t&acirc;m theo đuổi giấc mơ học h&agrave;nh l&agrave; điều v&ocirc; c&ugrave;ng xa vời đối với em Hồ Văn Tỏa ở th&ocirc;n Tr&agrave; Bao, x&atilde; Sơn Tr&agrave;, huyện Tr&agrave; Bồng, tỉnh Quảng Ng&atilde;i. Em Tỏa sinh năm 2009 hiện đang học lớp 7, trường THCS số 2, Tr&agrave; Phong. Mẹ em mất sớm, n&ecirc;n hiện nay em đang sống c&ugrave;ng anh trai v&agrave; ba l&agrave; Hồ Văn Tiếng. Gia đ&igrave;nh em thuộc diện hộ ngh&egrave;o, ba l&agrave;m nghề n&ocirc;ng, trồng l&uacute;a ở rẫy. Ngo&agrave;i ra, ba em cũng tranh thủ những khi vụ m&ugrave;a chưa bận rộn đi l&agrave;m mướn lấy th&ecirc;m ng&agrave;y c&ocirc;ng, c&oacute; th&ecirc;m ch&uacute;t chi ph&iacute; ra v&agrave;o. D&ugrave; vậy kinh tế gia đ&igrave;nh em vẫn thuộc diện đặc biệt kh&oacute; khăn. Để c&oacute; thể nu&ocirc;i hai con đi tiếp tục đi học, ba em vừa l&agrave;m cha vừa l&agrave;m mẹ để chăm s&oacute;c hai anh em Tỏa kh&ocirc;n lớn. Bao nhi&ecirc;u g&aacute;nh nặng gia đ&igrave;nh đều một m&igrave;nh &ocirc;ng g&aacute;nh v&aacute;c. Thấu hiểu nỗi vất vả của ba, hai anh em Tỏa lu&ocirc;n bảo ban nhau chăm chỉ học tập, v&agrave; phụ gi&uacute;p ba l&agrave;m việc nh&agrave;.&nbsp;</p>

<p>Gia đ&igrave;nh 3 người nh&agrave; em Hồ Văn Tỏa hiện tại c&ugrave;ng sinh sống trong một ng&ocirc;i nh&agrave; được x&acirc;y tạm từ c&aacute;c mảnh gỗ, v&aacute;n &eacute;p. Ch&uacute;ng được chắp v&aacute; tạm với nhau để c&oacute; nơi che mưa chắn nắng cho cả gia đ&igrave;nh. Căn bếp cũng chỉ d&ugrave;ng bằng v&agrave;i ba vi&ecirc;n gạch k&ecirc; l&ecirc;n.&nbsp;</p>',
            'cau_chuyen' => '<p>Số Heo V&agrave;ng n&agrave;y đ&atilde; được nh&agrave; t&agrave;i trợ Thư Trần quy đổi th&agrave;nh 80 triệu đồng tiền mặt. Ngo&agrave;i ra, huyện Đo&agrave;n địa phương sẽ hỗ trợ 20 triệu đồng. Ng&ocirc;i nh&agrave; sẽ được x&acirc;y dựng tại Tổ 1, Th&ocirc;n Tr&agrave; Bao, Sơn Tr&agrave;, Tr&agrave; Bồng, tỉnh Quảng Ng&atilde;i với diện t&iacute;ch 40m2 gồm 1 ph&ograve;ng kh&aacute;ch v&agrave; 2 ph&ograve;ng ở. Hy vọng với ng&ocirc;i nh&agrave; mới tuy đơn sơ nhưng cực k&igrave; vững ch&atilde;i n&agrave;y sẽ gi&uacute;p em nu&ocirc;i lớn ước mơ học tập th&agrave;nh t&agrave;i.</p>

<p><strong>Ho&agrave;n th&agrave;nh dự &aacute;n:&nbsp;C&ugrave;ng Sức Mạnh 2000 g&oacute;p Heo V&agrave;ng x&acirc;y dựng nh&agrave; hạnh ph&uacute;c cho em Hồ Văn Tỏa mồ c&ocirc;i mẹ</strong></p>

<p><strong>Số Heo V&agrave;ng đ&atilde; g&acirc;y quỹ th&agrave;nh c&ocirc;ng:</strong>&nbsp;1.000.263</p>

<p><strong>Đơn vị triển khai:</strong><a href="https://momo.vn/song-tot/suc-manh-2000">&nbsp;Sức Mạnh 2000</a></p>

<p><strong>Thời gian g&acirc;y quỹ:</strong>&nbsp;17/10/2022</p>

<p><strong>Địa điểm hỗ trợ:</strong>&nbsp;Quảng Ng&atilde;i</p>

<p>C&oacute; thể y&ecirc;n t&acirc;m theo đuổi giấc mơ học h&agrave;nh l&agrave; điều v&ocirc; c&ugrave;ng xa vời đối với em Hồ Văn Tỏa ở th&ocirc;n Tr&agrave; Bao, x&atilde; Sơn Tr&agrave;, huyện Tr&agrave; Bồng, tỉnh Quảng Ng&atilde;i. Em Tỏa sinh năm 2009 hiện đang học lớp 7, trường THCS số 2, Tr&agrave; Phong. Mẹ em mất sớm, n&ecirc;n hiện nay em đang sống c&ugrave;ng anh trai v&agrave; ba l&agrave; Hồ Văn Tiếng. Gia đ&igrave;nh em thuộc diện hộ ngh&egrave;o, ba l&agrave;m nghề n&ocirc;ng, trồng l&uacute;a ở rẫy. Ngo&agrave;i ra, ba em cũng tranh thủ những khi vụ m&ugrave;a chưa bận rộn đi l&agrave;m mướn lấy th&ecirc;m ng&agrave;y c&ocirc;ng, c&oacute; th&ecirc;m ch&uacute;t chi ph&iacute; ra v&agrave;o. D&ugrave; vậy kinh tế gia đ&igrave;nh em vẫn thuộc diện đặc biệt kh&oacute; khăn. Để c&oacute; thể nu&ocirc;i hai con đi tiếp tục đi học, ba em vừa l&agrave;m cha vừa l&agrave;m mẹ để chăm s&oacute;c hai anh em Tỏa kh&ocirc;n lớn. Bao nhi&ecirc;u g&aacute;nh nặng gia đ&igrave;nh đều một m&igrave;nh &ocirc;ng g&aacute;nh v&aacute;c. Thấu hiểu nỗi vất vả của ba, hai anh em Tỏa lu&ocirc;n bảo ban nhau chăm chỉ học tập, v&agrave; phụ gi&uacute;p ba l&agrave;m việc nh&agrave;.&nbsp;</p>

<p>Gia đ&igrave;nh 3 người nh&agrave; em Hồ Văn Tỏa hiện tại c&ugrave;ng sinh sống trong một ng&ocirc;i nh&agrave; được x&acirc;y tạm từ c&aacute;c mảnh gỗ, v&aacute;n &eacute;p. Ch&uacute;ng được chắp v&aacute; tạm với nhau để c&oacute; nơi che mưa chắn nắng cho cả gia đ&igrave;nh. Căn bếp cũng chỉ d&ugrave;ng bằng v&agrave;i ba vi&ecirc;n gạch k&ecirc; l&ecirc;n.&nbsp;</p>',
            'keywords' => 'Chung tay mang đến phép màu y tế cho 4 cuộc đời nhỏ không may mắn gặp dị tật bẩm sinh'
        ];

        DB::table('projects')->truncate();
        $categories = Category::whereNotNull('parent_id')->get();
        foreach ($categories as $category) {
            // create 20 posts each category.
            for ($i = 0; $i < 20; $i++) {

                foreach (self::PROJECT_NAMES as $key => $val) {
                    foreach (ProgramType::all() as $program) {
                        $initData = [
                            'category_id' => $category->id,
                            'status' => Helpers::POST_STATUS_PUBLISHED,
                            'image' => 'uploads/projectimage.jpeg',
                            'image1' => 'uploads/imagebaiviet.jpeg',
                            'image2' => 'uploads/projectimage.jpeg',
                            'image3' => 'uploads/imagebaiviet.jpeg',
                            'image4' => 'uploads/projectimage.jpeg',
                            'image5' => 'uploads/imagebaiviet.jpeg',
                            'project_name' => $key,
                            'program_id' => $program->id,
                        ];
                        foreach ($translatable as $tran => $value) {
                            $initData[$tran] = $value;
                        }
                        $project = Project::create($initData);
                        foreach ($translatable as $name => $value) {
                            $translations = [];
                            foreach ($languages as $lang => $langName) {
                                $translations[$lang] = $value." ".$langName." ".$i;
                            }
                            $project->setTranslations($name, $translations);
                            $project->save();
                        }
                    }
                }
            }
        }
    }

    public static function getSettings($settings, $key)
    {
        if (!isset($settings)) {
            return null;
        }
        if (!isset($settings[$key])) {
            return null;
        }
        return $settings[$key];
    }
    public static function numberFormatVi($amount)
    {
        $fmt = new NumberFormatter( 'vi_VN', NumberFormatter::CURRENCY );
        return $fmt->formatCurrency($amount, "đ");
    }

    public static function uniPayGetPaymentUrl($projectId, $amount, $phone): array
    {
        $uniPayUser = "dev_laoshop";
        $uniPayPassword = "A0qjjN1RKB2mQUM";
        $backendUrl = "https://10.120.251.100:8686/unipay/payment/credential";
        $serviceName = "LaosFund";
        $orderNumber = Str::uuid();
        $msisdn = $phone;
        $price = (float) $amount;

        $project = Project::find($projectId);
        if (!$project) {
            return ['Can not find project!', null];
        }

        if (!$project->program_id) {
            return ['Can not find program!', null];
        }

        $program = Program::find($project->program_id);
        if (!$program) {
            return ['Can not find program!', null];
        }

        $payment = Payment::create([
            'project_id' => $project->id,
            'program_id' => $project->program->id,
            'partner_id' => $project->program->partner_id,
            'amount' => $price,
            'phone' => $phone,
            'order_number' => $orderNumber,
            'status' => self::PAYMENT_STATUS_CREATE,
            'donation_type' => $program->donation_type
        ]);

        if ($payment->donation_type == self::PROGRAM_DONATION_TYPE_ITEM) {
            // set payment success and return to open popup
            $payment->status = self::PAYMENT_STATUS_SUCCESS;
            $payment->response_code = "ITEM_RESPONSE_CODE";
            $payment->payment_number = "ITEM_PAYMENT_NUMBER";
            $payment->bill_number = self::PAYMENT_ITEM_BILL_NUMBER;
            $payment->save();
            return [null, url(route('frontend.main', $project->slug.'.html').'?payment_id='.$payment->id)];
        }

        $params = [
            'username' => $uniPayUser,
            'password' => $uniPayPassword,
            'serviceName' => $serviceName,
            'orderNumber' => $orderNumber,
            'msisdn' => $msisdn,
            'price' => $price,
            'callbackUrl' => route('frontend.callback').'?payment_id='.$payment->id,
            'lang' => session()->get('locale') ?? 'vi',
            'redirectWeb' => true,
            'upoint' => false,
            'promo' => false,
        ];

        // phone 2097504175
        // https://test-api-um.unitel.com.la:8280/services/umoneyOTP/get_otp_operation?msisdn=8562097504175

        // chỉ chọn umoney mới dùng otp được

        //http://127.0.0.1:8000/callback?payment_id=19&responseCode=030&paymentNumber=036371611961641&billNumber=VSU5XOREG23EY5H

        // https://vilove.tnet.vn/chung-tay-mang-den-phep-mau-y-te-cho-4-cuoc-doi-nho-khong-may-man-gap-di-tat-bam-sinh-vietnamese-19-12-2.html?payment_id=19

        $payment->log_params = json_encode($params, true);
        $payment->save();

        $client = new Client(['verify' => false]);
        $headers = [
            'Content-Type' => 'application/json',
        ];

        try {
            $body = json_encode($params, true);
            $request = new Request('POST', $backendUrl, $headers, $body);
            $res = $client->sendAsync($request)->wait();
            $ars = json_decode($res->getBody(), true);
            $paymentUrl = $ars['data']['paymentUrl'] ?? null;
            if ($paymentUrl) {
                $payment->payment_url = $paymentUrl;
                $payment->save();
                return ['', $paymentUrl];
            } else {
                $payment->log_error = 'Can not get data=> paymentUrl from api body :'.$res->getBody();
                $payment->status = self::PAYMENT_STATUS_ERROR;
                $payment->save();
                return ['can not get payment url', null];
            }
        } catch (Exception $exception) {
            $payment->log_error = "error when call uniPayGetToken : ".$exception->getMessage();
            $payment->status = self::PAYMENT_STATUS_ERROR;
            $payment->save();
            return ['Error : '.$exception->getMessage(), null];
        }
    }

    public static function verifyPayment($payment)
    {
        $uniPayUser = "dev_laoshop";
        $uniPayPassword = "A0qjjN1RKB2mQUM";

        $params = [
            'username' => $uniPayUser,
            'password' => $uniPayPassword,
            'orderNumber' => $payment->order_number,
        ];

        $verifyUrl = "https://10.120.251.100:8686/unipay/payment/checkTransaction";
        $client = new Client(['verify' => false]);
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $body = json_encode($params, true);
        $request = new Request('POST', $verifyUrl, $headers, $body);
        $res = $client->sendAsync($request)->wait();
        try {
            $ars = json_decode($res->getBody(), true);
            $responseCode = $ars['data']['responseCode'] ?? null;
            $paymentNumber = $ars['data']['paymentNumber'] ?? null;
            $billNumber = $ars['data']['billNumber'] ?? null;

            // Code	Mô tả
            //100	Giao dịch thất bại
            //001	Giao dịch chưa kết thúc
            //010	Thành công bằng Upoint
            //020	Thành công bằng tài khoản gốc
            //030	Thành công bằng Umoney
            //040	Thành công bằng App Link Bank
            //050	Thành công bằng QR Bank
            $payment->response_code = $responseCode;
            $payment->payment_number = $paymentNumber;
            $payment->bill_number = $billNumber;
            if ($responseCode == "100") {
                $payment->status = Helpers::PAYMENT_STATUS_ERROR;
            } else {
                $payment->status = Helpers::PAYMENT_STATUS_SUCCESS;
            }
            $payment->save();
        } catch (Exception $exception) {
            $payment->log_error = "error when call uniPayGetToken : ".$exception->getMessage();
            $payment->status = self::PAYMENT_STATUS_ERROR;
            $payment->save();
        }
    }



    public static function findCateByIdentify($identify)
    {
        $cate = Category::where('identify', $identify)->first();
        if (!$cate) {
            return null;
        }
        return $cate;
    }

    public static function goToHoancanhQuyenGop()
    {
        $cate = self::findCateByIdentify('hoan-canh-quyen-gop');

        return route('frontend.main', $cate->slug).'?id='.$cate->id;
    }

    public static function goToTintucCongDong()
    {
        $cate = self::findCateByIdentify('tin-tuc-cong-dong');

        return route('frontend.main', $cate->slug).'?id='.$cate->id;
    }

    public static function getProjectDetailUrlByProgramId($programId)
    {
        $project = Project::where('program_id', $programId)->first();

        if (!$project) {
            return self::goToHoancanhQuyenGop();
        }

        return route('frontend.main', $project->slug.'.html');
    }

    public static function getStatistic($partnerId = null, $donationType = null)
    {
        $queryTotalProgram = Program::query();
        $queryTotalAmount = Payment::where('donation_type', self::PROGRAM_DONATION_TYPE_MONEY);
        $queryTotalItem = Payment::where('donation_type', self::PROGRAM_DONATION_TYPE_ITEM);
        $queryTotalTurn = Payment::query();

        if ($partnerId) {
            $queryTotalProgram = $queryTotalProgram->where('partner_id', $partnerId);
            $queryTotalAmount = $queryTotalAmount->where('partner_id', $partnerId);
            $queryTotalItem = $queryTotalItem->where('partner_id', $partnerId);
            $queryTotalTurn = $queryTotalTurn->where('partner_id', $partnerId);
        }

        if ($donationType) {
            $queryTotalProgram = $queryTotalProgram->where('donation_type', $donationType);
            $queryTotalAmount = $queryTotalAmount->where('donation_type', $donationType);
            $queryTotalItem = $queryTotalItem->where('donation_type', $donationType);
            $queryTotalTurn = $queryTotalTurn->where('donation_type', $donationType);
        }
        $queryTotalProgram = $queryTotalProgram->count();
        $queryTotalAmount = $queryTotalAmount->where('status', self::PAYMENT_STATUS_SUCCESS)->sum('amount');
        $queryTotalItem = $queryTotalItem->where('status', self::PAYMENT_STATUS_SUCCESS)->sum('amount');
        $queryTotalTurn = $queryTotalTurn->count();
        return [
            'total_program' => $queryTotalProgram,
            'total_amount' => $queryTotalAmount,
            'total_item' => $queryTotalItem,
            'total_turn' => $queryTotalTurn,
        ];
    }

    public static function getTopDonateByProjectId($projectId, $type, $limit = 100) {
         if ($type == 'top') {
             return DB::table('payments')
                 ->selectRaw("phone, sum(amount) as total")
                 ->where('project_id', $projectId)
                 ->where('status', self::PAYMENT_STATUS_SUCCESS)
                 ->limit($limit)
                 ->groupBy("phone")
                 ->orderBy("total", "desc")
                 ->get();
         }

        if ($type == 'new') {
            return DB::table('payments')
                ->selectRaw("phone, amount as total, created_at")
                ->where('project_id', $projectId)
                ->where('status', self::PAYMENT_STATUS_SUCCESS)
                ->limit($limit)
                ->orderBy("created_at", "desc")
                ->get();
        }
        return null;
    }

    public static function hiddenPhone($phone) {
        $text = [];
        if (!$phone) {
            return null;
        }
        foreach (str_split($phone) as $index => $charPhone) {
            if ($index < 7)  {
                $text[] = "*";
            } else {
                $text[] = $charPhone;
            }
        }
        return implode($text);
    }
}


