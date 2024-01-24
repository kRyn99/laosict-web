<section class="section-news bg-gray-50">
    <div class="section-container">
        <div class="section-wrapper">
            <div class="title-article" id="section-article2">
                <h2>{{ trans('home.section_tintuc_header') }}</h2>
                <!-- Nếu mô tả ít hơn 30 từ thì cho text căn giữa, dùng cái này -->
                <!-- <h3 class="section_desc">{{ trans('home.section_tintuc_desc') }}</h3> -->
                <!-- Nếu mô tả lớn hơn 30 từ thì cho text căn đều, dùng cái này -->
                <!-- <h3 style="text-align: justify;">{{ trans('home.section_tintuc_desc') }}</h3> -->
            </div>
            <div class="section-content">
                @foreach (\App\Helpers::getPosts($case, $cate) as $post)
                    <div class="news">
                        <div class="news-container">
                            <div class="news-wrapper">
                                <div class="news-img">
                                    <div class="news-img-container">
                                        <div class="show-on-mobile">
                                            <a href="{{ route('frontend.post_detail', $post->slug.'.html') }}">
                                                <span>
                                                    <!-- ảnh thumb trên mobile size 468 x 225 -->
                                                    <img alt="{{ $post->name }}" src="{{ \App\Helpers::getImageUrlBySize($post->image, 468, 225)  }}" decoding="async" data-nimg="fill">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="show-on-pc">
                                            <a href="{{ route('frontend.post_detail', $post->slug.'.html') }}">
                                                <span>
                                                    <!-- ảnh thumb trên PC size 254 x 122 -->
                                                    <img alt="{{ $post->name }}" src="{{ \App\Helpers::getImageUrlBySize($post->image, 254, 122)  }}" decoding="async" data-nimg="fill">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-title">
                                    <div class="text"><a href="{{ route('frontend.post_detail', $post->slug.'.html') }}">{{ $post->name }}</a></div>
                                    <div class="date"><span class="inline-block text-xs text-gray-500"> {{ $post->created_at->format('d/m/Y') }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn-more">
                <a class="btn-xemthem" href="{{ \App\Helpers::goToTintucCongDong() }}">{{ trans('home.section_brand_desc_2') }}</a>
            </div>
        </div>
    </div>
</section>
