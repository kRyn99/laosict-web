<section class="charity-wallet-info">
    <div class="section-container">
        <div class="section-wrapper">
            <div class="charity-wallet-info-container">
                <div class="charity-wallet-info-wrapper">
                    <div class="text-left">
                        <h1 class="service-page-title">{{ trans('home.vi_nhan_ai_section_header') }}</h1>
                        <p class="service-page-description">
                            {{ trans('home.vi_nhan_ai_section_desc') }}
                            <br>
                            <span>
                               {{ trans('home.vi_nhan_ai_section_desc1') }}
                            </span>
                        </p>
                    </div>
                    @include('frontend.partials.statistic', ['data' => \App\Helpers::getStatistic()])
                    <div class="btn-donate">
                        <div>
                            <a href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"  rel="noreferrer">
                                <span class="btn-primary">{{ trans('home.button_quyen_gop') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="charity-wallet-img">
                    <div class="aspect-w-5 aspect-h-4 relative hidden md:block">
                <span>
                   <!-- assets/img/img-pig.jpg => 489 x 397 -->
                    <img alt="Ví Nhân Ái - Thiện nguyện mỗi ngày" src="{{ url(\App\Helpers::getSettings($settings, 'vi_nhan_ai_image')) }}" decoding="async"
                         data-nimg="fill">
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
