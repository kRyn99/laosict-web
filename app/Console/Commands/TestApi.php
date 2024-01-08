<?php

namespace App\Console\Commands;

use App\Helpers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use Backpack\Settings\app\Models\Setting;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class TestApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$token = Helpers::callApiLoginGetToken();
        //dd(Helpers::callApiGetList($token, 'get-synthesize-volunteer-programs'));
        //dd(Helpers::callApiGetList($token, 'get-partner-list'));

//        DB::table("program_types")->truncate();
//        DB::table("partners")->truncate();
//        DB::table("programs")->truncate();
//        Helpers::syncApiData();


        $languages = [
            'vi' => 'Vietnamese',
            'en' => 'English',
            'zh' => 'Chinese',
            'lo' => 'Laos'
        ];

        // delete post from category

        //Helpers::genPostContent();

        foreach (Post::all() as $post) {
            $post->program_id = rand(1,2);
            $post->saveQuietly();
        }



//          foreach (DB::table('categories')->get() as $cate) {
//              $bannerImagePC = $cate->banner_image_pc;
//              $bannerImageMobile = $cate->banner_image_mobile;
//              $eloquentCate = Category::find($cate->id);
//
//              $translations = [];
//              foreach ($languages as $lang => $langName) {
//                  $translations[$lang] = $bannerImagePC;
//              }
//              $eloquentCate->setTranslations('banner_image_pc', $translations);
//              $eloquentCate->save();
//
//              $translations = [];
//              foreach ($languages as $lang => $langName) {
//                  $translations[$lang] = $bannerImageMobile;
//              }
//              $eloquentCate->setTranslations('banner_image_mobile', $translations);
//              $eloquentCate->save();
//
//          }
        //$settings = Setting::pluck('value', 'key')->all();
//        foreach ($languages as $lang => $langName) {
//            $ars = [
//                [
//                    'key'         => 'index_banner_pc_'.$lang,
//                    'name'        => 'Index Page Banner PC (1920x740)',
//                    'description' => 'For SEO',
//                    'value'       => $settings['index_banner_pc'],
//                    'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
//                    'active'      => 1,
//                ],
//                [
//                    'key'         => 'index_banner_mobile_'.$lang,
//                    'name'        => 'Index Page Banner Mobile (900x900)',
//                    'description' => 'For SEO',
//                    'value'       => $settings['index_banner_mobile'],
//                    'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
//                    'active'      => 1,
//                ],
//                [
//                    'key'         => 'feedback_banner_pc_'.$lang,
//                    'name'        => 'Feedback Page Banner PC (1920x740)',
//                    'description' => 'For SEO',
//                    'value'       => 'uploads/demo-banner-pc.jpg',
//                    'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
//                    'active'      => 1,
//                ],
//
//                [
//                    'key'         => 'feedback_banner_mobile_'.$lang,
//                    'name'        => 'Feedback Page Banner Mobile  (900x900)',
//                    'description' => 'For SEO',
//                    'value'       => 'uploads/demo-banner-mobile.jpg',
//                    'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
//                    'active'      => 1,
//                ],
//            ];
//            foreach ($ars as $ar) {
//                DB::table('settings')->insert($ar);
//            }
//        }


    }
}
