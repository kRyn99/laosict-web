<section class="situation-section" id="situation-section">
    <div class="section-container situation-container">
        <div class="section-wrapper situation-wrapper">
            <div class="title-article" id="section-article1">
                <h2>{{ trans('home.section_article1_header') }}</h2>
                {{-- <h3 class="section_desc">{{ trans('home.section_article1_desc') }}</h3> --}}
            </div>
            <div data-reach-tabs="" data-orientation="horizontal">
                <div class="jsx-1428799533 soju-carousel relative -mx-5">
                    <div role="tablist" aria-orientation="horizontal" data-reach-tab-list="">
                        @foreach ($programDonationTypeKeys as $index => $donationType)
                            <button aria-controls="tabs--panel--{{$index}}" aria-selected="{{ $index == 0? 'true' : 'false' }}" role="tab" tabindex="{{ $index == 0? '0' : '-1' }}" data-reach-tab="#tabs--panel--{{$index}}" data-orientation="horizontal" id="tabs--tab--{{$index}}" type="button" data-selected="">{{ $donationType == \App\Helpers::PROGRAM_DONATION_TYPE_MONEY ? trans('home.quyen_gop_bang_tien') : trans('home.quyen_gop_bang_item') }}</button>
                        @endforeach
                    </div>
                </div>
                <div data-reach-tab-panels="">
                    @foreach ($programDonationTypeKeys as $index => $donationType)
                        <div aria-labelledby="tabs--tab--{{$index}}" role="tabpanel" aria-selected="{{ $index == 0? 'true' : 'false' }}" tabindex="{{ $index == 0? '0' : '-1' }}" data-reach-tab-panel="" id="tabs--panel--{{$index}}">
                            <div class="tabpanel-container" id="projectContent-{{$donationType}}">
                                @foreach (\App\Helpers::getIndexProjects($donationType) as $project)
                                    @include('frontend.partials.index_project', ['project' => $project])
                                @endforeach
                            </div>
                            <div class="btn-more">
                                <button id="loadMoreProject-{{$donationType}}" onclick="void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg> {{ trans('home.section_article1_xem_them') }}
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@push('end_scripts')
    <script>
        $(function(){
            let loadMoreButtonMoney = $('#loadMoreProject-money');
            let loadMoreButtonItem = $('#loadMoreProject-item');
            let startMoney = 6;
            let startItem = 6;
            loadMoreButtonMoney.click(function(){
                $.post('{{ route('frontend.load_more_project') }}', { start : startMoney , donationType : 'money'}, function(res) {
                    if (res.error) {
                        loadMoreButtonMoney.hide();
                    } else {
                        startMoney+=6;
                        $(res.html).appendTo("#projectContent-money");
                    }
                });
            });
            loadMoreButtonItem.click(function(){
                $.post('{{ route('frontend.load_more_project') }}', { start : startMoney , donationType : 'item'}, function(res) {
                    if (res.error) {
                        loadMoreButtonItem.hide();
                    } else {
                        startItem+=6;
                        $(res.html).appendTo("#projectContent-item");
                    }
                });
            });
        });
    </script>
@endpush
