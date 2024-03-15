<footer>
    <div class="footer-container">
        <div class="group-1">
            <div class="content">
                <h2 class="title">{{ trans('home.footer_cham_soc_khach_hang') }}</h2>
                <p><span class="text-white text-opacity-50">{{ trans('home.footer_dia_chi') }}: </span>{{ trans('settings.company_address') }}</p>
                <p><span class="text-white text-opacity-50">{{ trans('home.footer_hotline') }}: </span> <a class="none_hover" href="tel:{{ \App\Helpers::getSettings($settings, 'company_tel') }}" title="Tel">{{ \App\Helpers::getSettings($settings, 'company_tel') }}</a></p>
                <p><span class="text-white text-opacity-50">Email: </span> <a  class="none_hover" href="mailto:{{ \App\Helpers::getSettings($settings, 'company_email') }}">{{ \App\Helpers::getSettings($settings, 'company_email') }}</a></p>

            </div>
        </div>
        <div class="foot-center">
             <h2 class="title">TƯ VẤN TUYỂN SINH</h2>
             <div class="content">
                <!-- Phạm Thị Mẫn - 0963023185 - phamman@techmaster.vn -->
                <p><span class="text-white text-opacity-50">Minh Tran - <a  class="none_hover" href="mailto:{{ \App\Helpers::getSettings($settings, 'company_email') }}">{{ \App\Helpers::getSettings($settings, 'company_email') }}</a> - <a class="none_hover" href="tel:020 9432 1223" title="Tel">020 9432 1223</a></p>
                <p><span class="text-white text-opacity-50">Phạm Thị Mẫn - <a  class="none_hover" href="mailto:{{ \App\Helpers::getSettings($settings, 'company_email') }}">{{ \App\Helpers::getSettings($settings, 'company_email') }}</a> - <a class="none_hover" href="tel:{{ \App\Helpers::getSettings($settings, 'company_tel') }}" title="Tel">{{ \App\Helpers::getSettings($settings, 'company_tel') }}</a></p>
                <p><span class="text-white text-opacity-50">Phạm Thị Mẫn - <a  class="none_hover" href="mailto:{{ \App\Helpers::getSettings($settings, 'company_email') }}">{{ \App\Helpers::getSettings($settings, 'company_email') }}</a> - <a class="none_hover" href="tel:{{ \App\Helpers::getSettings($settings, 'company_tel') }}" title="Tel">{{ \App\Helpers::getSettings($settings, 'company_tel') }}</a></p>
            </div>
        </div>
        <div class="group-2">
            <div>
            <h2 class="title">{{ trans('home.footer_tai_ung_dung_tren_dt') }}</h2>
                <div class="content">
                    <a target="_blank" rel="noreferrer" href="{{ \App\Helpers::getSettings($settings, 'company_ios_link') }}">
                        <img alt="" style="border-radius:8px" aria-hidden="true" src="/frontend/assets/img/btn-appstore.jpg">
                    </a>
                    <a target="_blank" rel="noreferrer" href="{{ \App\Helpers::getSettings($settings, 'company_android_link') }}">
                        <img alt="Google Play" style="border-radius:8px" src="/frontend/assets/img/btn-ggplay.jpg" decoding="async" data-nimg="intrinsic">
                    </a>
                </div>
            </div>
            <!-- <div class="group-3 mt-6">
                <h2 class="title">{{ trans('home.footer_ket_noi_voi_chung_toi') }}</h2>
                <div class="content">
                    <a href="{{ \App\Helpers::getSettings($settings, 'company_whatapp_link') }}" target="_blank"><img src="/frontend/assets/img/icon-whatapp.png" alt="" class="lazyload"></a>
                    <a href="{{ \App\Helpers::getSettings($settings, 'facebook_link') }}"><img src="/frontend/assets/img/facebook.svg" alt="" class="lazyload"></a>
                    <a href="{{ \App\Helpers::getSettings($settings, 'company_wechat_link') }}" target="_blank"><img src="/frontend/assets/img/icon-wechat.png" alt="" class="lazyload"></a>
                </div>
            </div> -->
        </div>
    </div>
</footer>

<div id="scrollToTop" class="back-to-top-button">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" class="jsx-e310cb30ec364d2c"></path>
        </svg>
    </div>
</div>
