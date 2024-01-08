@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')

        <nav class="breadcrumb breadcrumb-top" aria-label="breadcrumb">
            <ol>
                <li>
                    <a href="{{ route('frontend.index') }}" aria-label="Home page">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    </a>
                </li>
                <li>
                    <span>{{ trans('home.doi_tac_dong_hanh') }}</span>
                </li>
            </ol>
        </nav>
        @if ($banner_pc && $banner_mobile)
            @include('frontend.partials.banner')
        @endif
        <main>
            <section class="charity-wallet-info">
                <div class="section-container">
                    <div class="section-wrapper">
                        <div class="charity-wallet-info-container">
                            <div class="charity-wallet-info-wrapper">
                                <div class="text-left">
                                    <h1 class="service-page-title">{{ $partner->name }}</h1>
                                    <p class="service-page-description">
                                        {!! $partner->desc !!}
                                    </p>
                                </div>
                                @include('frontend.partials.statistic', ['data' => \App\Helpers::getStatistic($partner->id)])
                                <div class="btn-donate">
                                    <div>
                                        <a href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"  rel="noreferrer">
                                            <span class="btn-primary">{{ trans('home.button_quyen_gop') }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($partner->frontend_image)
                            <div class="charity-wallet-img">
                                <div class="aspect-w-5 aspect-h-4 relative hidden md:block">
                                    <span>
                                      <!-- assets/img/img-heart.jpg => 489 x 397 -->
                                        <img alt="{{ $partner->name }}" src="{{ url($partner->frontend_image) }}" decoding="async"
                                             data-nimg="fill">
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <section class="situation-page">
                <div class="title-article" id="section-article1">
                    <h2>{{ trans('home.chuong_trinh_quyen_gop') }}</h2>
                    <h3 class="section_desc">{{ trans('home.cac_chuong_trinh_quyen_gop', ['partner_name' => $partner->name]) }}</h3>
                </div>
                <div class="situation-page-content">
                    @foreach (\App\Helpers::getPartnerProjects($partner->id) as $project)
                        @include('frontend.partials.index_project', ['project' => $project])
                    @endforeach
                </div>
                <div class="btn-more">
                    <button onclick="window.location.href='{{ \App\Helpers::goToHoancanhQuyenGop() }}';">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg> {{ trans('home.section_article1_xem_them') }}
                    </button>
                </div>
            </section>
            <section class="volunteer-section" id="section-html">
                <div class="section-container">
                    <div class="section-wrapper">
                        <div class="title-article">
                            <h2>{{ trans('home.about', ['partner_name' => $partner->name]) }}</h2>
                        </div>
                        <div class="section-content">
                            <div class="soju__prose service-page-long-content">
                                <div class="is-truncated page-content relative">
                                     {!! $partner->content !!}
                                </div>
                                <div class="cloned-content"></div>
                                <div class="button-show">
                                    <button type="button">
                                        {{ trans('home.section_article1_xem_them') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('frontend.partials.news_section', ['case' => 'index', 'cate' => null])
            <section class="partner-section">
                <div class="section-container">
                    <div class="section-wrapper">
                        <div class="title-article" id="section-brand">
                            <h2>{{ trans('home.cac_doi_tac_khac') }}</h2>
                            <h3 class="section_desc">{{ trans('home.cac_doi_tac_khac_desc') }}</h3>
                        </div>
                        <div class="swp-brand relative">
                            @include('frontend.partials.partner_block', ['partners' => \App\Helpers::getOtherPartners($partner->id)])
                            <div class="btn-more"><a class="btn-xemthem" href="{{ route('frontend.main', 'doi-tac-dong-hanh') }}" target="_blank">{{ trans('home.section_brand_desc_2') }}</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('frontend.footer')
    </div>
@endsection

