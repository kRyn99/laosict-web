@extends('frontend.layout')

@section('content')
@include('frontend.header')


        


<nav class="breadcrumb breadcrumb-top text-sm" aria-label="breadcrumb">
    <ol class="mx-auto w-full max-w-6xl px-5 md:px-8 lg:px-8">
        <li>
            <a href="{{ route('frontend.index') }}" aria-label="Home page">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
            </a>
        </li>

        <li>
            <a href="{{ route('frontend.main', $projectCate->slug) }}?id={{$projectCate->id}}"
               aria-label="{{ $projectCate->name }}"
               title="{{ $projectCate->name }}">{{ $projectCate->name }}</a>
        </li>
        <li>
            <span>{{ $project->name }}</span>
        </li>
    </ol>
</nav>
@if ($banner_pc && $banner_mobile)
    @include('frontend.partials.banner')
@endif

        <section class="container-fluid banner">
            <article class="container banner-content">
                <div class="pt-4">
                    <p class="fs-18 text-purple">Let's <b>Begins</b></p>
                    <p class="fs-64 ff-popins fw-700">Programming Fundamentals <span class="text-purple">Course</span> For you</p>
                    <p class="ff-popins fs-18 text-lightgrey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                    <div class="mt-5">
                        <button class="btn btn-register mr-3" onclick="register()">Register</button>
                        <img src="/new-front-end/image/circle-yellow-right-arrow.png" width="32px" height="32px">
                        <label class="ff-inter fw-700 fs-18 m-0 align-middle">3 months to become an expert</label>
                    </div>
                </div>
                <img src="/new-front-end/image/banner-programming-course.png">
            </article>
        </section>
        <section class="container-fluid about-course">
            <article class="container about-course-content">
                <p class="fs-18 ff-inter text-purple">ABOUT COURSE</p>
                <div class="row">
                    <div class="col-4">
                        <p class="ff-popins fw-700 fs-40">What Do You Get From Us</p>
                        <p class="ff-popins fs-18 text-lightgrey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                    </div>
                    <div class="col-8 benefit-wrapper">
                        <div class="card-benefit">
                            <div class="icon"><i class="fa-regular fa-user"></i></div>
                            <p class="ff-inter fw-700 fs-18 text-white">Professional Teacher</p>
                            <p class="ff-popins fs-14 text-gainsboro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                        </div>
                        <div class="card-benefit">
                            <div class="icon"><i class="fa-regular fa-user"></i></div>
                            <p class="ff-inter fw-700 fs-18 text-white">Course Certificate</p>
                            <p class="ff-popins fs-14 text-gainsboro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                        </div>
                        <div class="card-benefit">
                            <div class="icon"><i class="fa-regular fa-user"></i></div>
                            <p class="ff-inter fw-700 fs-18 text-white">Interesting Learning</p>
                            <p class="ff-popins fs-14 text-gainsboro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-4">
                    <button class="btn btn-warning btn-carousel-benefit" onclick="prevCard()"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="btn btn-warning btn-carousel-benefit ml-4" onclick="nextCard()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </article>
        </section>
        <section class="container-fluid career-opportunities">
            <article class="container career-opportunities-content">
                <img src="/new-front-end/image/img-career-oppotunities.png">
                <div class="d-flex flex-column justify-content-center">
                    <p class="ff-inter fs-18 text-yellow">CAREER OPPOTUNITIES</p>
                    <p class="ff-popins fs-40 fw-700 text-white">Human resource needs in the ICT</p>
                    <p class="ff-popins fs-18 text-gainsboro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="ff-inter fs-24 fw-700 text-center text-yellow">6,000</div>
                            <div class="ff-inter fs-18 text-center text-gainsboro">ICT Jobs / year</div>
                        </div>
                        <div class="col-4">
                            <div class="ff-inter fs-24 fw-700 text-center text-yellow">4,000</div>
                            <div class="ff-inter fs-18 text-center text-gainsboro">ShortageUser</div>
                        </div>
                        <div class="col-4">
                            <div class="ff-inter fs-24 fw-700 text-center text-yellow">500 USD</div>
                            <div class="ff-inter fs-18 text-center text-gainsboro">Salary</div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="container-fluid list-course" id="list-course">
            <article class="container list-course-content">
                <div>
                    <div class="row-items">
                        <div class="course-card">
                            <img src="{{ url($project->image2) }}">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-22">LEARN HTML</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">3 Sesstions</span>9 Hours
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <img src="{{ url($project->image3) }}">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-22">LEARN CSS</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">6 Sesstions</span>18 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-items">
                        <div class="course-card">
                            <img src="{{ url($project->image4) }}">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-22">JavaScript</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">9 Sesstions</span>27 Hours
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <img src="{{ url($project->image5) }}">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-22">Project</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">5 Sesstions</span>15 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-description">
                    <p class="ff-inter fs-18 text-purple">COURSE CONTENT</p>
                    <p class="ff-popins fs-40 fw-700">Main subjects in this course</p>
                    <p class="ff-popins fs-18 text-lightgrey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sem non convallis molestie.</p>
                    <form class="register-form" action="register.php">
                        <p class="ff-inter fs-18 text-center text-yellow">Register now!</p>
                        <input type="text" placeholder="Full name" id="fullname">
                        <input type="text" placeholder="Email" id="email">
                        <input type="text" placeholder="Handphone" id="handphone">
                        <input type="text" placeholder="Address" id="address">
                        <textarea placeholder="Message" id="message"></textarea>
                        <input type="submit" value="Register" class="btn btn-register-form ff-inter fw-700 fs-18">
                    </form>
                </div>
            </article>
        </section>
<main>
    <div class="section-project">
        <div id="hoancanh">
            <div class="summary">
                <div class="text">
                    <h1>{{ $project->name }}</h1>
                    <p>{{ $project->desc }}</p>
                </div>
                <div class="date-buttonShare">
                    <div class="date"><span class="relative">{{ $project->created_at->format('d/m/Y') }}</span>
                    </div>
                    <div class="button-share">
                        <div class="relative">
                            <button aria-haspopup="true" aria-controls="menu--44" class="button-share"
                                    id="menu-button--menu--44" type="button" data-reach-menu-button="">
                                <div class="button-share-bg">
                                    <span>{{ trans('home.modal_content_chia_se') }}</span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M13 14h-2a8.999 8.999 0 0 0-7.968 4.81A10.136 10.136 0 0 1 3 18C3 12.477 7.477 8 13 8V3l10 8-10 8v-5z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                            <div hidden="true"  class="dropdown-filter-mobile shadow-level3">
                                <div class="jsx-ea51e03070354ffb arbitrary-element">
                                    <div aria-labelledby="menu-button--menu" role="menu" tabindex="-1"
                                         class="grid grid-cols-1 " id="menu--1" data-reach-menu-items="">
                                        <div role="menuitem" tabindex="-1"
                                             class="relative cursor-pointer select-none whitespace-nowrap rounded py-2 pl-9 pr-2 text-sm text-gray-600 hover:bg-gray-100"
                                             data-valuetext="Sao chép liên kết " data-reach-menu-item=""
                                             id="option-0--menu--1"
                                             onclick="copyToClipboard('{{ url(route('frontend.main', $project->slug.'.html')) }}'); return false;">
                                            {{ trans('home.sao_chep_lien_ket') }}
                                            <span class="jsx-ea51e03070354ffb absolute left-2 top-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="jsx-ea51e03070354ffb h-5 w-5">
                                                <path fill-rule="evenodd"
                                                      d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                      clip-rule="evenodd" class="jsx-ea51e03070354ffb"></path>
                                                 </svg>
                                            </span>
                                        </div>
                                        <div onclick="share(); return false;" role="menuitem" tabindex="-1"
                                             data-valuetext="{{ trans('home.chia_se_fb') }}" data-reach-menu-item=""
                                             id="option-1--menu--1">
                                            {{ trans('home.chia_se_fb') }}
                                            <span>
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                      fill="currentColor">
                                                    <path
                                                        d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"
                                                        class="jsx-ea51e03070354ffb"></path>
                                                 </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-group">
                <div class="img-group-container">
                    <div class="img-group-wrapper" id="lightgallery">
                        @if ($project->image1)
                            <div class="aspect-w-4 aspect-h-3 img-wrapper" data-src="{{ url($project->image1) }}">
                                <span>
                                    <img alt="{{ $project->name }}" src="{{ url($project->image1) }}"
                                         decoding="async" data-nimg="fill">
                                </span>
                            </div>
                        @endif
                        @if ($project->image2)
                            <div class="aspect-w-4 aspect-h-3 img-wrapper" data-src="{{ url($project->image2) }}">
                                <span>
                                    <img alt="{{ $project->name }}" src="{{ url($project->image3) }}"
                                         decoding="async" data-nimg="fill">
                                </span>
                            </div>
                        @endif
                        @if ($project->image3)
                            <div class="aspect-w-4 aspect-h-3 img-wrapper" data-src="{{ url($project->image3) }}">
                                <span>
                                    <img alt="{{ $project->name }}" src="{{ url($project->image3) }}"
                                         decoding="async" data-nimg="fill">
                                </span>
                            </div>
                        @endif
                        @if ($project->image4)
                            <div class="aspect-w-4 aspect-h-3 img-wrapper" data-src="{{ url($project->image4) }}">
                                <span>
                                    <img alt="{{ $project->name }}" src="{{ url($project->image4) }}"
                                         decoding="async" data-nimg="fill">
                                </span>
                            </div>
                        @endif
                        @if ($project->image5)
                            <div class="aspect-w-4 aspect-h-3 img-wrapper" data-src="{{ url($project->image5) }}">
                                <span>
                                    <img alt="{{ $project->name }}" src="{{ url($project->image5) }}"
                                         decoding="async" data-nimg="fill">
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="lg-react-element"></div>
                    <button type="button" class="btn-view-img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80h336zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48zM256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160v-48z"></path>
                        </svg>
                        {{ trans('home.xem_5_hinh') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="situation-project-tab lg:block hidden">
        <div class="section-wrapper">
            <div class="soju-carousel">
                <div class="breadcrumb" role="tabs">
                    <a class="show-hoan-canh" href="javascript:void(0)" class="active">
                        <span>{{ trans('home.hoan_canh') }}</span></a>
                    <a class="show-cau-chuyen" href="javascript:void(0)">
                        <span>{{ trans('home.cau_chuyen') }}</span>
                    </a>
                    <a class="show-nha-hao-tam" href="javascript:void(0)">
                        <span>{{ trans('home.nha_hao_tam') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrapper project-content">
        <div class="project-content-container">
            <div class="project-content-wrapper">
                <div class="project-content-left">
                    <div class="donate-info">
                        <h2>{{ trans('home.thong_tin_quyen_gop') }}</h2>
                        <div class="dn-detail">
                            <div class="dn-info">
                                <strong
                                    class="item-end dn-value">{{ number_format($project->program->current_collect_amount) }}{{\App\Helpers::getDisplaySignAmount($project->program->donation_type)}}</strong>
                                <span>/ {{ number_format($project->program->total_collect_amount) }}{{\App\Helpers::getDisplaySignAmount($project->program->donation_type)}}</span>
                            </div>
                            <div class="dn-progress">
                                <div class="dn-progress-bar"
                                     style="width: {{ number_format($project->program->collect_percent) }}%;"></div>
                            </div>
                            <div class="dn-time dn-result">
                                <div>
                                    <h4>{{ trans('home.section_article1_turn') }}</h4>
                                    <p>{{ number_format($project->program->total_collect_turn) }}</p>
                                </div>
                                <div>
                                    <h4>{{ trans('home.section_article1_get') }}</h4>
                                    <p>{{ number_format($project->program->collect_percent) }}%</p>
                                </div>
                                <div>
                                    <h4>{{ trans('home.thoi_han_con') }}</h4>
                                    @if ($project->program->day_left > 0)
                                        <p>{{$project->program->day_left}} {{ trans('home.ngay') }}</p>
                                    @else
                                        <p>{{ trans('home.da_het_thoi_han')  }}</p>
                                    @endif

                                </div>
                            </div>
                            <div class="btn-wrapper">

                                @if ($project->program->current_collect_amount >= $project->program->total_collect_amount)
                                    <div>
                                        <a class="mt-4 block"
                                           href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"
                                           rel="noreferrer">
                                                    <span
                                                        class="btn-primary">{{ trans('home.hoan_canh_moi_nhat') }}</span>
                                        </a>
                                    </div>
                                @else

                                    @if ($project->program->day_left > 0)
                                        <div>
                                            <button data-modal="modal-donate"
                                                    data-id="{{ $project->id }}"
                                                    class="btn-primary">{{ trans('home.button_quyen_gop') }}</button>

                                        </div>
                                    @else
                                        <div>
                                            <a class="mt-4 block"
                                               href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"
                                               rel="noreferrer">
                                                        <span
                                                            class="btn-primary">{{ trans('home.hoan_canh_moi_nhat') }}</span>
                                            </a>
                                        </div>
                                    @endif
                                @endif

                                <button style="display: none" id="open_success"
                                        data-modal="modal-donate" class="btn-primary"></button>
                            </div>
                            <hr class="mt-6 mb-5 opacity-50">
                            <div class="dn-partner">
                                <div class="title">{{ trans('home.dong_hanh_cung_du_an') }}</div>
                                <div class="dn-partner-container">
                                    <div class="dn-partner-img-wrapper">
                                        <div><span><img alt="{{ $project->program->partner->name }}"
                                                        src="{{ url($project->program->partner->image)}}"
                                                        decoding="async" data-nimg="fill"></span></div>
                                    </div>
                                    <div class="dn-partner-name">
                                        <strong>{{ $project->program->partner->name }}</strong>
                                        <a href="{{ route('frontend.partner_detail', $project->program->partner->slug) }}"
                                           class="stretched-link">
                                            <small><i>{{ trans('home.tim_hieu_them') }} &gt;&gt;</i></small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="situation-project-tab  lg:hidden">
                        <div class="section-wrapper">
                            <div class="soju-carousel">
                                <div class="breadcrumb" role="tabs">
                                <a class="show-hoan-canh" href="javascript:void(0)" class="active">
                                    <span>{{ trans('home.hoan_canh') }}</span></a>
                                <a class="show-cau-chuyen" href="javascript:void(0)">
                                    <span>{{ trans('home.cau_chuyen') }}</span>
                                </a>
                                <a class="show-nha-hao-tam" href="javascript:void(0)">
                                    <span>{{ trans('home.nha_hao_tam') }}</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hoancanh-content">
                        <h2 class="title">{{ trans('home.hoan_canh') }}</h2>
                        <article class="soju__prose small">
                            {!! $project->hoan_canh !!}
                        </article>
                    </div>
                    <div id="cauchuyen-content" style="display: none">
                        <h2 class="title">{{ trans('home.cau_chuyen') }}</h2>
                        <article class="soju__prose small">
                            {!! $project->cau_chuyen !!}
                        </article>
                    </div>
                    <div id="nhahaotam-content" style="display:none">
                        <div class="margin-content">
                            <h2 class="title">{{ trans('home.nha_hao_tam_hang_dau') }}</h2>
                            <div class="border-table">
                                @include('frontend.partials.content_top_hao_tam', ['project' => $project, 'topHaotam' => $top10])

{{--                                    <div class="btn-more">--}}
{{--                                        <a class="btn-xemthem" href="javascript:void(0)" id="show-more-top-hao-tam">{{ trans('home.section_brand_desc_2') }}</a>--}}
{{--                                        <a style="display: none" id="open-modal-top-hao-tam" data-modal="modal-top-nhahaotam"></a>--}}
{{--                                    </div>--}}
                            </div>
                            <div class="mb-5 mt-3">
                                <h2 class="title">{{ trans('home.nha_hao_tam_moi_nhat') }}</h2>
                                <div class="border-table">
                                    @include('frontend.partials.content_new_hao_tam', ['project' => $project, 'newHaotam' => $new10])
                                </div>
{{--                                    <div class="btn-more">--}}
{{--                                        <a class="btn-xemthem" href="javascript:void(0)" id="show-more-new-hao-tam">{{ trans('home.section_brand_desc_2') }}</a>--}}
{{--                                        <a style="display: none" href="javascript:void(0)" id="open-modal-new-hao-tam" data-modal="modal-new-nhahaotam">TEST</a>--}}
{{--                                    </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-content-right">
                    <div class="donate-summary">
                        <div class="donate-summary-container">
                            <div class="donate-summary-wrapper">
                                <h2>{{ trans('home.thong_tin_quyen_gop') }}</h2>
                                <div class="dn-detail">
                                    <div class="dn-info">
                                        <strong
                                            class="item-end dn-value">{{ number_format($project->program->current_collect_amount) }}{{\App\Helpers::getDisplaySignAmount($project->program->donation_type)}}</strong>
                                        <span>/ {{ number_format($project->program->total_collect_amount) }}{{\App\Helpers::getDisplaySignAmount($project->program->donation_type)}}</span>
                                    </div>
                                    <div class="dn-progress">
                                        <div class="dn-progress-bar"
                                             style="width: {{ number_format($project->program->collect_percent) }}%;"></div>
                                    </div>
                                    <div class="dn-time dn-result">
                                        <div>
                                            <h4>{{ trans('home.section_article1_turn') }}</h4>
                                            <p>{{ number_format($project->program->total_collect_turn) }}</p>
                                        </div>
                                        <div>
                                            <h4>{{ trans('home.section_article1_get') }}</h4>
                                            <p>{{ number_format($project->program->collect_percent) }}%</p>
                                        </div>
                                        @if ($project->program->current_collect_amount >= $project->program->total_collect_amount)
                                            <div>
                                                <h4>{{ trans('home.dat_muc_tieu') }}</h4>
                                                <p>&nbsp;</p>
                                            </div>
                                        @else
                                            @if ($project->program->day_left > 0)
                                                <div>
                                                    <h4>{{ trans('home.thoi_han_con') }}</h4>
                                                    <p>{{$project->program->day_left}} {{ trans('home.ngay') }}</p>
                                                </div>
                                            @else
                                                <div>
                                                    <h4>{{ trans('home.da_het_thoi_han') }}</h4>
                                                    <p>&nbsp;</p>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="btn-wrapper">

                                        @if ($project->program->current_collect_amount >= $project->program->total_collect_amount)
                                            <div>
                                                <a class="mt-4 block"
                                                   href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"
                                                   rel="noreferrer">
                                                    <span
                                                        class="btn-primary">{{ trans('home.hoan_canh_moi_nhat') }}</span>
                                                </a>
                                            </div>
                                        @else

                                            @if ($project->program->day_left > 0)
                                                <div>
                                                    <button data-modal="modal-donate"
                                                            data-id="{{ $project->id }}"
                                                            class="btn-primary">{{ trans('home.button_quyen_gop') }}</button>

                                                </div>
                                            @else
                                                <div>
                                                    <a class="mt-4 block"
                                                       href="{{ \App\Helpers::goToHoancanhQuyenGop() }}"
                                                       rel="noreferrer">
                                                        <span
                                                            class="btn-primary">{{ trans('home.hoan_canh_moi_nhat') }}</span>
                                                    </a>
                                                </div>
                                            @endif
                                        @endif

                                        <button style="display: none" id="open_success"
                                                data-modal="modal-donate" class="btn-primary"></button>
                                    </div>
                                    <hr class="mt-6 mb-5 opacity-50">
                                    <div class="dn-partner">
                                        <div class="title">{{ trans('home.dong_hanh_cung_du_an') }}</div>
                                        <div class="dn-partner-container">
                                            <div class="dn-partner-img-wrapper">
                                                <div><span><img alt="{{ $project->program->partner->name }}"
                                                                src="{{ url($project->program->partner->image)}}"
                                                                decoding="async" data-nimg="fill"></span></div>
                                            </div>
                                            <div class="dn-partner-name">
                                                <strong>{{ $project->program->partner->name }}</strong>
                                                <a href="{{ route('frontend.partner_detail', $project->program->partner->slug) }}"
                                                   class="stretched-link">
                                                    <small><i>{{ trans('home.tim_hieu_them') }}
                                                            &gt;&gt;</i></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-10"></div>
        </div>
    </div>
</main>
@include('frontend.footer')
@endsection
@section('after_scripts')
    <script>
        function share() {
            FB.ui({
                method: 'share',
                href: '{{ url(route('frontend.main', $project->slug.'.html')) }}',
            }, function (response) {
            });
        }

        function copyToClipboard(text) {
            let $temp = $("<input>");
            $("body").append($temp);
            $temp.val(text).select();
            document.execCommand("copy");
            $temp.remove();
        }

        $(function () {
            let openPopupSuccess = '{{ $errorPayment.$paymentNumber  }}';
            if (openPopupSuccess) {
                console.log("button open success trigger");
                $('button#open_success').trigger('click');

            }
            $('.show-hoan-canh').click(function (event) {
                event.preventDefault();
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
                $('#hoancanh-content').show();
                $('#cauchuyen-content').hide();
                $('#nhahaotam-content').hide();
            });
            $('.show-cau-chuyen').click(function (event) {
                event.preventDefault();
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
                $('#hoancanh-content').hide();
                $('#cauchuyen-content').show();
                $('#nhahaotam-content').hide();
            });
            $('.show-nha-hao-tam').click(function (event) {
                event.preventDefault();
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
                $('#hoancanh-content').hide();
                $('#cauchuyen-content').hide();
                $('#nhahaotam-content').show();
            });

            $('#show-more-top-hao-tam').click(function(){
                console.log("show-more-top-hao-tam click");
                // load content to this

                $.post('{{ route('frontend.load_more_hao_tam') }}', { project_id : {{ $project->id }}, type: 'top' }, function (res) {
                    console.log("res");
                    $('#modal_top_hao_tam_content').html(res.html);
                    $('a#open-modal-top-hao-tam').trigger('click');
                })

            });
            $('#show-more-new-hao-tam').click(function(){
                // load content to this
                $.post('{{ route('frontend.load_more_hao_tam') }}', { project_id : {{ $project->id }}, type: 'new' }, function (res) {
                    $('#modal_new_hao_tam_content').html(res.html);
                    $('a#open-modal-new-hao-tam').trigger('click');
                })

            });
        });
    </script>
@endsection

@section('after_styles')
    <style>
        #hoancanh .btn-view-img {
            pointer-events: none;
        }
    </style>
@endsection

