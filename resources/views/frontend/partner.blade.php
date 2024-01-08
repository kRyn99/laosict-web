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
            <section class="partner-section">
                <div class="section-container">
                    <div class="section-wrapper">
                        <div class="title-article" id="section-brand">
                            <h2>{{ trans('home.doi_tac_dong_hanh_title') }}</h2>
                            <h3 class="section_desc">{{ trans('home.doi_tac_dong_hanh_desc') }}</h3>
                        </div>
                        <div class="swp-brand relative">
                            @include('frontend.partials.partner_block', ['partners' => \App\Helpers::getPartners()])
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('frontend.footer')
    </div>
@endsection
