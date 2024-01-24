
@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')


        @if ($banner_pc && $banner_mobile)
            @include('frontend.partials.banner')
        @endif

        <main>
            @include('frontend.partials.hoan_canh_section', ['programDonationTypeKeys' => [\App\Helpers::PROGRAM_DONATION_TYPE_MONEY, \App\Helpers::PROGRAM_DONATION_TYPE_ITEM]])
            <section class="charity-wallet is-hidden">
                <div class="section-container charity-wallet-container">
                    <div class="section-wrapper charity-wallet-wrapper">
                        <div>
                            <div class="title-article" id="section-promotion">
                                <h2>{{ trans('home.section_promotion_header') }}</h2>
                            </div>
                            <div class="charity-wallet-content">
                                <div class="wallet-content charity-wallet-left">
                                    <div>
                                        <div>
                                            <div class="icon-wallet"><img class="lazyload" alt="{{ trans('home.section_promotion_desc_1') }}" src="/frontend/assets/img/icon-1.svg" width="auto"></div>
                                        </div>
                                        <div>
                                            <h3 class="title">{{ trans('home.section_promotion_desc_1') }}</h3>
                                            <p class="text-des">{{ trans('home.section_promotion_desc_2') }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <div class="icon-wallet"><img class="lazyload" alt="{{ trans('home.section_promotion_desc_3') }}" src="/frontend/assets/img/icon-2.svg" width="auto"></div>
                                        </div>
                                        <div>
                                            <h3 class="title">{{ trans('home.section_promotion_desc_3') }}</h3>
                                            <p class="text-des">{{ trans('home.section_promotion_desc_4') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wallet-content charity-wallet-center">
                                    <div class="img-wallet">
                     <span>
                        <span>
                          <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27300%27%20height=%27384%27/%3e">
                        </span>
                       <img alt="Phone" src="/frontend/assets/img/img-wallet.jpg" decoding="async" data-nimg="intrinsic">
                     </span>
                                    </div>
                                    <div class="reason-cta">
                                        <div data-qr-id="22">
                                            <button onclick="window.location.href='{{ \App\Helpers::goToHoancanhQuyenGop() }}'"; class="btn-primary">{{ trans('home.section_promotion_desc_5') }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="wallet-content charity-wallet-right">
                                    <div>
                                        <div>
                                            <div class="icon-wallet"><img class="lazyload" alt="{{ trans('home.section_promotion_desc_6') }}" src="/frontend/assets/img/icon-3.svg" width="auto"></div>
                                        </div>
                                        <div>
                                            <h3 class="title">{{ trans('home.section_promotion_desc_6') }}</h3>
                                            <p class="text-des">{{ trans('home.section_promotion_desc_7') }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <div class="icon-wallet"><img class="lazyload" alt="{{ trans('home.section_promotion_desc_8') }}" src="/frontend/assets/img/icon-4.svg" width="auto"></div>
                                        </div>
                                        <div>
                                            <h3 class="title">{{ trans('home.section_promotion_desc_8') }}</h3>
                                            <p class="text-des">{{ trans('home.section_promotion_desc_9') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.partials.partner_section')

            @include('frontend.partials.html_section')
            @include('frontend.partials.news_section', ['case' => 'index', 'cate' => null])
            @include('frontend.partials.faq_section')
        </main>

        @include('frontend.footer')
    </div>
@endsection
