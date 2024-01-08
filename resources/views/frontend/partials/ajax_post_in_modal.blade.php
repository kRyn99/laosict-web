<div>
    <span>
        <img alt="{{ $post->name }}" src="{{ url($post->image) }}" decoding="async" data-nimg="responsive">
     </span>
</div>
<h3>{{ $post->name }}</h3>
<div>
    <div>
        <a href="{{ route('frontend.main', $post->category->slug) }}?id={{$post->category->id}}"><span>{{ $post->category->name }}</span></a>
        <div><span class="jsx-9785e16a0278564b">{{ $post->created_at->format('d/m/Y') }}</span>&nbsp;-&nbsp;<span class="jsx-9785e16a0278564b">{{ $post->views }}</span>&nbsp;{{ trans('home.modal_content_luot_xem') }}</div>
    </div>
    <div>
        <div class="relative">
            <button aria-haspopup="true" aria-controls="menu--44" class="button-share" id="menu-button--menu--44" type="button" data-reach-menu-button="">
                <div class="button-share-bg">
                    <span>{{ trans('home.modal_content_chia_se') }}</span>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M13 14h-2a8.999 8.999 0 0 0-7.968 4.81A10.136 10.136 0 0 1 3 18C3 12.477 7.477 8 13 8V3l10 8-10 8v-5z"></path>
                        </g>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</div>
<div class="soju__prose">
    <p class="article-desc">{!! $post->desc !!}</p>
    <div class="article-content">
        {!! $post->content !!}
    </div>
</div>
