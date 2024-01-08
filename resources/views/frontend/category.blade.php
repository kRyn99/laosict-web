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
            <a href="{{ route('frontend.main', $category->parent->slug) }}?id={{$category->parent->id}}" title="{{ $category->parent->name }}">{{ $category->parent->name }}</a>
        </li>
        @endif
        <li>
            <span>{{ $category->name }}</span>
        </li>
    </ol>
</nav>
@if ($banner_pc && $banner_mobile)
    @include('frontend.partials.banner')
@endif
<main>

    @if ($page == \App\Helpers::IDENTIFY_FIRST_PAGE_SHOW_TOTAL_STATIC)
        @include('frontend.partials.total_section')
    @endif

    @if ($page == \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_MONEY_STATIC)
        @include('frontend.partials.money_section')
    @endif

    @if ($page == \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_ITEM_STATIC)
        @include('frontend.partials.item_section')
    @endif


    @if (in_array($page, [\App\Helpers::IDENTIFY_FIRST_PAGE_SHOW_TOTAL_STATIC, \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_MONEY_STATIC, \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_ITEM_STATIC, 'doi-tac-dong-hanh']))
       @include('frontend.partials.partner_section')
    @endif

        @if ($page == \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_MONEY_STATIC)
            @include('frontend.partials.hoan_canh_section', ['programDonationTypeKeys' => [\App\Helpers::PROGRAM_DONATION_TYPE_MONEY]])
        @elseif ($page == \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_ITEM_STATIC)
            @include('frontend.partials.hoan_canh_section', ['programDonationTypeKeys' => [ \App\Helpers::PROGRAM_DONATION_TYPE_ITEM]])
        @else
            @include('frontend.partials.hoan_canh_section', ['programDonationTypeKeys' => [\App\Helpers::PROGRAM_DONATION_TYPE_MONEY, \App\Helpers::PROGRAM_DONATION_TYPE_ITEM]])
        @endif
    @if (in_array($page, [\App\Helpers::IDENTIFY_FIRST_PAGE_SHOW_TOTAL_STATIC]))
       @include('frontend.partials.html_section')
    @endif

    @if (in_array($page, [\App\Helpers::IDENTIFY_FIRST_PAGE_SHOW_TOTAL_STATIC, \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_MONEY_STATIC, \App\Helpers::IDENTIFY_SECOND_PAGE_SHOW_ITEM_STATIC]))
       @include('frontend.partials.news_section', ['case' => 'category', 'cate' => $category])
    @endif

    @if ($page == 'tin-tuc-cong-dong')
        @include('frontend.partials.post_section', ['case' => 'category', 'cate' => $category])
    @endif

    @include('frontend.partials.faq_section')
</main>
@include('frontend.footer')
<div class="footer-cta sticky">
  <div>
     <div><a href="#situation-section" class="btn-primary" title="Quyên góp ngay">{{ trans('home.button_quyen_gop_ngay_footer') }}</a></div>
  </div>
</div>
@endsection

@section('after_scripts')
    <script>
        $(function(){
            let loadMoreButton = $('#loadMorePost');
            let start = 12;
            loadMoreButton.click(function(){
                $.post('{{ route('frontend.load_more_post') }}', { start : start}, function(res) {
                    if (res.error) {
                        loadMoreButton.hide();
                    } else {
                        start+=12;
                        $(res.html).appendTo("#post-content-list");
                    }
                });
            });
        });
    </script>
@endsection
