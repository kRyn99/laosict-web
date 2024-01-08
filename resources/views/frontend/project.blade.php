@extends('frontend.layout')

@section('content')

    @include('frontend.header')

    <nav class="breadcrumb breadcrumb-top text-sm" aria-label="breadcrumb">
        <ol class="mx-auto w-full max-w-6xl px-5 md:px-8 lg:px-8">
            <li>
                <a href="{{ route('frontend.index') }}" aria-label="Home page">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                </a>
            </li>
            @if ($category->parent_id)
            <li>
                <span>{{ $category->parent->name }}</span>
            </li>
            @endif
        </ol>
    </nav>
    <section class="section-banner-text" style="background-image: url({{ $banner_pc }});">
        <!-- width = 1920px, height = 400px -->
        <div class="drop-cover"></div>
        <div class="section-wrapper">
            <div class="section-content">
                <h1 class="service-page-title">{{ $category->name }}</h1>
                <!-- @if($category->identify == 'benh-hiem-ngheo')
                    <h2 class="service-page-description mt-3 text-sm text-white text-opacity-80 md:text-base" style="text-align: justify;">{{ $category->desc }}</h2>
                @else
                    <h2 class="service-page-description mt-3 text-sm text-white text-opacity-80 md:text-base">{{ $category->desc }}</h2>
                @endif -->
                <h2 class="service-page-description mt-3 text-sm text-white text-opacity-80 md:text-base">{{ $category->desc }}</h2>
            </div>
        </div>
    </section>
    <main>
        <section class="situation-page font-inter">
            <div class="situation-menu">
                <div class="soju-carousel">
                    <div id="grad-slider-container">
                        @foreach ($category->parent->children as $child)
                        <div class="grad-item {{ $category->identify == $child->identify ? 'is-active' : "" }}"><a href="{{ $page == $category->identify? '#' : route('frontend.main', $child->slug) }}?id={{$child->id}}">{{ $child->name }}</a></div>
                        @endforeach
                    </div>
                </div>
                <div id="button-grad-right" class="jsx-1428799533 grad pl-10">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div id="category-content-list" class="situation-page-content">
                @foreach (\App\Helpers::getCategoryProjects($category) as $project)
                    @include('frontend.partials.index_project', ['project' => $project])
                @endforeach
            </div>
            <div class="btn-more">
                <button id="loadMoreProject" onclick="void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg> {{ trans('home.section_article1_xem_them') }}
                </button>
            </div>
        </section>
    </main>

    @include('frontend.footer')
@endsection

@section('after_scripts')
    <script>
        $(function(){
            let loadMoreButton = $('#loadMoreProject');
            let start = 6;
            loadMoreButton.click(function(){
                $.post('{{ route('frontend.load_more_project') }}', { start : start , cate : '{{$category->id}}'}, function(res) {
                    if (res.error) {
                        loadMoreButton.hide();
                    } else {
                        start+=6;
                        $(res.html).appendTo("#category-content-list");
                    }
                });
            });
        });
    </script>
@endsection
