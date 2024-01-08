<section class="section-news">
    <div class="section-container">
        <div class="section-wrapper">
            <div class="title-article" id="section-article2">
                <h2>{{ trans('home.section_tintuc_header') }}</h2>
                <h3 class="section_desc">{{ trans('home.section_tintuc_desc') }}</h3>
            </div>
            <div id="post-content-list" class="section-content">
                @foreach (\App\Helpers::getPosts($case, $cate) as $post)
                    @include('frontend.partials.one_post', ['post' => $post])
                @endforeach
            </div>
            @if (\App\Helpers::getTotalPosts() > 12)
                <div class="btn-more">
                    <a id="loadMorePost" class="btn-xemthem" href="javascript:void(0)">
                        {{ trans('home.section_brand_desc_2') }}
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
