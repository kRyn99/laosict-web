<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="vi"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$meta_title}}</title>
    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">


    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>

    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>


    <!-- phần chi tiết cho khóa học -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="https://cdn.usebootstrap.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.usebootstrap.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--khác -->
    <link rel="shortcut icon" href="/uploads/favicon.png" type="image/vnd.microsoft.icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Noto+Sans+Lao:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- lightgallery plugins -->
    <link type="text/css" rel="stylesheet" href="/frontend/assets/css/lightgallery.css" />
    <link type="text/css" rel="stylesheet" href="/frontend/assets/css/lg-zoom.css" />

    <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/output.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">


    <link rel="stylesheet" href="/new-front-end/css/landing-page.css">
    <!-- <script type="text/javascript" src="/new-front-end/js/landing-page.js"></script> -->
    @yield('after_styles')
</head>

<body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '510924958933272',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v17.0'
        });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<div class="wrapper">
    @yield('content')
</div>

@include('frontend.partials.modal')
@include('frontend.partials.modal_donate')
@include('frontend.partials.modal_hao_tam')

<div style="display: none">
    <input type="hidden" id="thu_gon_txt" value="{{ trans("home.thu_gon")}}">
    <input type="hidden" id="xem_them_txt" value="{{trans("home.section_article1_xem_them")}}">
</div>
<script src="/frontend/assets/js/swiper-bundle.esm.browser.min.js"></script>
<script src="/frontend/assets/js/jquery-1.11.1.min.js"></script>
<script src="/frontend/assets/js/lazysizes.min.js"></script>

<!-- lightgallery plugins -->
<script src="/frontend/assets/js/lightgallery.umd.js"></script>
<script src="/frontend/assets/js/lg-zoom.umd.js"></script>

<script src="/frontend/assets/js/page_all.js"></script>
<script src="/frontend/assets/js/custom.js?v=2"></script>
@if ($script = \App\Helpers::getSettings($settings, 'analytics'))
    {!! $script !!}
@endif

@yield('after_scripts')

@stack('end_scripts')

</body>
</html>



