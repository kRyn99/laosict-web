<div class="banner">
    <div class="jsx-974c4914c5fc1860 swiper-hero">
        <div class="picture-wrapper">
            <!-- thẻ picture có 2 ảnh, ảnh to dùng có máy tính, ảnh nhỏ trên điện thoại
            assets/img/demo-banner-mobile.jpg => 900x900
            assets/img/demo-banner-pc.jpg => 1920x740 -->
            <picture>
                <source media="(max-width: 639px)" srcset="{{ $banner_mobile }}">
                <img src="{{ $banner_pc }}" class="lazyload absolute inset-0 w-full " alt="Banner 1">
            </picture>
        </div>
        <svg class="jsx-974c4914c5fc1860">
            <defs class="jsx-974c4914c5fc1860">
                <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox" class="jsx-974c4914c5fc1860">
                    <path d="M0,0 H1 V1 C1,1,0.823,0.96,0.5,0.96 C0.177,0.96,0,1,0,1 V0" fill="#fff7ed" class="jsx-974c4914c5fc1860"></path>
                </clipPath>
            </defs>
        </svg>
        <svg class="jsx-974c4914c5fc1860">
            <clipPath id="my-clip-path2" clipPathUnits="objectBoundingBox" class="jsx-974c4914c5fc1860">
                <path d="M0,0 H1 V1 C1,1,0.821,0.984,0.5,0.984 C0.179,0.984,0,1,0,1 V0" fill="#fff7ed" class="jsx-974c4914c5fc1860"></path>
            </clipPath>
        </svg>
    </div>
</div>
