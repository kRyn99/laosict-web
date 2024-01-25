<a id="btn-toggle-menu" data-toggle="#menu-primary-menu" href="javascript:void(0)" role="button" aria-expanded="false" aria-controls="menu-primary-menu" class="">{{ trans('home.toggle_menu') }}</a>
<header class="header">
    <h1 class="logo">
        <a href="{{ route('frontend.index') }}" title="{{ \App\Helpers::getSettings($settings, 'website_name') }}">
            <img src="{{ url(\App\Helpers::getSettings($settings, 'website_logo_header')) }}" alt="" class="lazyload" style="width:100px;height:40px">
            <span style="color: #f0c132">{{ \App\Helpers::getSettings($settings, 'website_name') }}</span>
        </a>
    </h1>
    <nav id="menu-primary-menu" class="header__nav">
        <ul>
            @foreach (\App\Helpers::getCategories() as $category)
                @if ($category->identify == \App\Helpers::IDENTIFY_HOAN_CANH_QUYEN_GOP)
                    <li class="menu {{ $page == $category->identify? '
            is-active' : "" }}" data-reach-accordion-item>
                        <a href="/vi-tre-em?id=7" title="{{ $category->name }}" class="parent-tap">

                            {{ $category->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="icon">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" class="jsx-ddfb0b416b0db288"></path>
                            </svg>
                        </a>
                        <div class="submenu">
                            <ul>
                                @foreach ($category->children as $childCate)
                                    <li class="{{ (isset($subPageId) && ($subPageId == $childCate->id))? 'active' : "" }}"><a href="{{ route('frontend.main', $childCate->slug) }}"  title="{{ $childCate->name }}">
                                            {{ $childCate->name }}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="menu {{ $page == $category->identify? '
            is-active' : "" }}"><a href="{{ route('frontend.main', $category->slug) }}" title="{{ $category->name }}">
                            @if ($category->identify == \App\Helpers::IDENTIFY_FIRST_PAGE_SHOW_TOTAL_STATIC)
                                <i class="icon-wallet-1"><img src="{{ url(\App\Helpers::getSettings($settings, 'wallet_icon_header_menu')) }}" alt="" class="lazyload"></i>
                            @endif
                            {{ $category->name }}
                        </a></li>
                @endif

            @endforeach

            <li class="menu {{ $page == 'partner' ? 'is-active' : ""}}"><a href="{{ route('frontend.partner') }}" title="{{ trans('home.doi_tac_dong_hanh') }}">{{ trans('home.doi_tac_dong_hanh') }}</a></li>

            <li class="menu {{ $page == 'feedback' ? 'is-active' : "" }}"><a href="{{ route('frontend.feedback') }}" title="{{ trans('home.menu_feedback_name') }}">{{ trans('home.menu_feedback_name') }}</a></li>
        </ul>
        <div class="lg:hidden block block-info">
        <!-- <div class="group-1">
            <div>
                <h2>{{ trans('home.footer_tai_ung_dung_tren_dt') }}</h2>
                <div class="content">
                    <a target="_blank" rel="noreferrer" href="{{ \App\Helpers::getSettings($settings, 'company_ios_link') }}">
                        <img alt="" aria-hidden="true" src="/frontend/assets/img/btn-appstore.jpg">
                    </a>
                    <a target="_blank" rel="noreferrer" href="{{ \App\Helpers::getSettings($settings, 'company_android_link') }}">
                        <img alt="Google Play" src="/frontend/assets/img/btn-ggplay.jpg" decoding="async" data-nimg="intrinsic">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="group-2">
            <div class="content">
                <h2>{{ trans('home.footer_cham_soc_khach_hang') }}</h2>
                <h3>{{ trans('settings.company_name') }}</h3>
                <p><span class="text-white text-opacity-50">{{ trans('home.footer_dia_chi') }}: </span>{{ trans('settings.company_address') }}</p>
                <p><span class="text-white text-opacity-50">{{ trans('home.footer_hotline') }}: </span> <a href="tel:{{ \App\Helpers::getSettings($settings, 'company_tel') }}" title="Tel">{{ \App\Helpers::getSettings($settings, 'company_tel') }}</a></p>
                <p><span class="text-white text-opacity-50">Email: </span> <a href="mailto:{{ \App\Helpers::getSettings($settings, 'company_email') }}">{{ \App\Helpers::getSettings($settings, 'company_email') }}</a></p>
                <p><span class="text-white text-opacity-50">{{ trans('home.footer_tong_dai_goi_ra') }}: </span> <a href="whatapp:{{ \App\Helpers::getSettings($settings, 'company_whatsapp') }}" title="Whatapp">{{ \App\Helpers::getSettings($settings, 'company_whatsapp') }}</a></p>
            </div>
        </div>
    </div>
    </nav>
    <div class="sticky-menu-right">
{{--            <div class="search">--}}
{{--                <input type="text" placeholder="{{ trans('home.menu_search') }}...">--}}
{{--            </div>--}}
             <div class="languages">
                <div class="lang-value-select">
                    <img src="/frontend/assets/img/flag_{{ \Illuminate\Support\Facades\App::getLocale() }}.png" alt="" class="imgFull lazyload"><div class="icon"></div>
                </div>
                <div class="lang-list-wrapper">
                    <ul id="lang-list">
                        @foreach (\App\Helpers::getFlagLang() as $lang => $langName)
                        <li class="{{ $lang == \Illuminate\Support\Facades\App::getLocale()? 'active' : "" }}">
                            <a href="javascript:void(0)" data-lang="{{ $lang }}" class="set-lang" title="" data-img="/frontend/assets/img/flag_{{$lang}}.png">
                                <img src="/frontend/assets/img/flag_{{$lang}}.png" alt="" class="imgFull lazyload">
                                <span>{{ $langName }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
</header>

@push('end_scripts')
  <script>
      $(function (){
          $('a.set-lang').click(function(){
              let lang = $(this).data('lang');
              $.post('{{ route('frontend.ajax_set_lang') }}', { lang: lang }, function(res) {
                  window.location.reload();
              });
          });
          if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.parent-tap').attr('target','_self');
            $('.parent-tap').attr('href','javascript:void(0)');
        }
      });
  </script>
@endpush
