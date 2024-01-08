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
                    <a href="{{ route('frontend.main', $post->category->slug) }}?id={{$post->category->id}}" aria-label="{{ $post->category->name }}" title="{{ $post->category->name }}">{{ $post->category->name }}</a>
                </li>
                <li>
                    <span>{{ $post->name }}</span>
                </li>
            </ol>
        </nav>
        <div class="section section-news-detail">
            <div class="section-container">
                <div class="section-wrapper">
                    <article>
                        <div class="big-img-detail">
                        <span>
                            <span></span>
                            <img alt="{{ $post->name }}" src="{{ url($post->image) }}" decoding="async" data-nimg="responsive" class="lazyload">
                        </span>
                        </div>
                        <h1>{{ $post->name }}</h1>
                        <div class="category-name">
                            <div class="category">
                                <a class="article-cate" href="{{ route('frontend.main', $post->category->slug) }}?id={{$post->category->id}}">{{ $post->category->name }}</a>
                                <span>·</span>
                                <div><span class="relative">{{ $post->created_at->format('d/m/Y')}}</span></div>
                            </div>
                            <div class="shrink-0">
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
                                    <div hidden class="dropdown-filter-mobile shadow-level3">
                                        <div class="arbitrary-element">
                                            <div aria-labelledby="menu-button--menu" role="menu" tabindex="-1" id="menu--1">
                                                <div role="menuitem" tabindex="-1"data-valuetext="Sao chép liên kết" id="option-0--menu--1"
                                                     onclick="copyToClipboard('{{ url(route('frontend.post_detail', $post->slug.'.html')) }}'); return false;">
                                                    {{ trans('home.sao_chep_lien_ket') }}
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                            clip-rule="evenodd" class="jsx-ea51e03070354ffb"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div onclick="share(); return false;" role="menuitem" tabindex="-1" data-valuetext="{{ trans('home.chia_se_fb') }}" id="option-1--menu--1">
                                                    {{ trans('home.chia_se_fb') }}
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
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
                                <a class="mt-4 block" href="{{ \App\Helpers::getProjectDetailUrlByProgramId($post->program_id) }}"  rel="noreferrer">
                                    <span class="btn-primary">{{ trans('home.button_quyen_gop') }}</span>
                                </a>
                            </div>
                        </div>
                        <p class="article-desc">{!! $post->desc !!}</p>
                        <div class="mt-4"></div>
                        <div class="article-content mt-4">
                            <div class="article-content-wapper">
                                {!! $post->content !!}
                            </div>
                            <div class="lg-react-element "></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        @include('frontend.footer')
    </div>
@endsection
@section('after_scripts')
    <script>
        function share() {
            FB.ui({
                method: 'share',
                href: '{{ url(route('frontend.post_detail', $post->slug.'.html')) }}',
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
    </script>
@endsection
