<div class="swiper swiper-horizontal">
    <div class="swiper-wrapper" aria-live="polite">
        @foreach ($partners as $groupPartner)
            <div class="swiper-slide" role="group">
            @foreach ($groupPartner as $partner)
                <!-- tất cả ảnh avartar trong slide này size 64 x 64 -->
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-wrapper">
                            <div>
                               <span>
                                 <img alt="{{ $partner->name }}" src="{{ \App\Helpers::getImageUrlBySize($partner->image, 64, 64) }}" decoding="async" data-nimg="fill" class="object-contain lazyload">
                               </span>
                            </div>
                            <div>
                                <h4><a href="{{ route('frontend.partner_detail', $partner->slug) }}" class="stretched-link" target="" rel="noreferrer">{{ $partner->name }}</a></h4>
                                <p>{{ $partner->slogan }}</p>
                                <a href="{{ route('frontend.partner_detail', $partner->slug) }}" class="link-detail" target="" rel="noreferrer"><small>{{ trans('home.section_brand_desc_1')  }} &gt;&gt;</small></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
<div class="button-prev button-swiper" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </svg>
</div>
<div class="button-next button-swiper" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
</div>
