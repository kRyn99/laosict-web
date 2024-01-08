<section class="charity-wallet-info">
    <div class="section-container">
        <div class="section-wrapper">
            <div class="charity-wallet-info-container">
                <div class="charity-wallet-info-wrapper">
                    <div class="text-left">
                        <h1 class="service-page-title">{{ trans('home.section_charity_header') }}</h1>
                        <p class="service-page-description">
                            {{ trans('home.section_charity_desc') }}
                            <br>
                              <span class="block text-md pt-4">
                                {{ trans('home.section_charity_desc1') }}
                              </span>
                        </p>
                    </div>
                    @include('frontend.partials.statistic', ['data' => \App\Helpers::getStatistic(null, \App\Helpers::PROGRAM_DONATION_TYPE_ITEM)])
                    <div class="btn-donate">
                        <div>
{{--                            <a href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"  rel="noreferrer">--}}
{{--                                <span class="btn-primary">{{ trans('home.button_quyen_gop_trong_hoa_ngay') }}</span>--}}
{{--                            </a>--}}
                            <a href="#situation-section" rel="noreferrer"><span class="btn-primary">{{ trans('home.button_quyen_gop_trong_hoa_ngay') }}</span></a>
{{--                            <a href="#voi-vang-intro" class="cursor-pointer" rel="noreferrer"><span class="btn-primary-outline ">{{ trans('home.button_gioi_thieu') }}</span></a>--}}
                        </div>
                    </div>
                </div>
                <div class="charity-wallet-img">
                    <div class="aspect-w-5 aspect-h-4 relative hidden md:block">
                <span>
{{--                  <!-- video size 532 x 413 -->--}}
{{--                  <video autoplay="" height="auto" width="100%" poster="{{ \App\Helpers::getSettings($settings, 'charity_video_thumb_image') }}" loop="" playsinline="" class="block">--}}
{{--                    <source src="{{ url(\App\Helpers::getSettings($settings, 'charity_video')) }}" type="video/mp4" class="jsx-e18afbcea943561a">--}}
{{--                  </video>--}}
                    <img src="{{ $category->frontend_image }}" height="auto" width="532px" />
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
