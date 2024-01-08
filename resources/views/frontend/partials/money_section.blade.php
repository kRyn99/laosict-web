<section class="charity-wallet-info">
    <div class="section-container">
        <div class="section-wrapper">
            <div class="charity-wallet-info-container">
                <div class="charity-wallet-info-wrapper">
                    <div class="text-left">
                        <h1 class="service-page-title">{{ trans('home.trai_tim_voi_vang_section_header') }}</h1>
                        <p class="service-page-description">
                            {{ trans('home.trai_tim_voi_vang_section_desc') }}
                        </p>
                    </div>
                    @include('frontend.partials.statistic', ['data' => \App\Helpers::getStatistic(null, \App\Helpers::PROGRAM_DONATION_TYPE_MONEY)])
                    <div class="btn-donate">
                        <div>
                            <!-- <a href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"  rel="noreferrer">
                                <span class="btn-primary">{{ trans('home.button_quyen_gop') }}</span>
                            </a> -->
                            <a href="#situation-section" rel="noreferrer"><span class="btn-primary">{{ trans('home.button_quyen_gop') }}</span></a>
                        </div>
                    </div>
                </div>
                <div class="charity-wallet-img">
                    <div class="aspect-w-5 aspect-h-4 relative hidden md:block">
                <span>
                  <!-- assets/img/img-heart.jpg => 489 x 397 -->
                    <img alt="Ví Nhân Ái - Thiện nguyện mỗi ngày" src="{{ url(\App\Helpers::getSettings($settings, 'trai_tim_voi_vang_image')) }}" decoding="async"
                         data-nimg="fill">
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
