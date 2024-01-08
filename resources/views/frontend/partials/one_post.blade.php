<div class="news">
    <div class="news-container">
        <div class="news-wrapper">
            <div class="news-img">
                <div class="news-img-container">
                    <div class="show-on-mobile">
                        <span>
                          <!-- ảnh thumb trên mobile size 468 x 225 -->
                          <img alt="{{ $post->name }}"
                               src="{{ \App\Helpers::getImageUrlBySize($post->image, 468, 225)  }}"
                               decoding="async" data-nimg="fill">
                        </span>
                    </div>
                    <div class="show-on-pc">
                        <span>
                          <!-- ảnh thumb trên PC size 254 x 122 -->
                          <img alt="{{ $post->name }}"
                               src="{{ \App\Helpers::getImageUrlBySize($post->image, 254, 122)  }}"
                               decoding="async" data-nimg="fill">
                        </span>
                    </div>
                </div>
            </div>
            <div class="news-title">
                <div class="text"><a
                        href="{{ route('frontend.post_detail', $post->slug.'.html') }}">{{ $post->name }}</a></div>
                <div class="date"><span
                        class="inline-block text-xs text-gray-500"> {{ $post->created_at->format('d/m/Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
