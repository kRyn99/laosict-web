<div style="position: relative;height:388px;cusor:pointer">
    <div class="ribbon"><span>Coming soon</span></div>
    <div class="donation-item">
    <div class="dn-img aspect-w-15 aspect-h-8">
        <span>
            <!-- assets/img/demo-img-post.jpg => 345 x 184 -->
            <img alt="{{ $project->name }}" src="{{ \App\Helpers::getImageUrlBySize($project->image, 345, 184) }}" decoding="async" data-nimg="fill" class="lazyload">
        </span>
    </div>
    <div class="dn-body">
        <div class="dn-title">
            {{ $project->name }}
        </div>
    </div>
    <div class="dn-footer">
        <!-- <div>
            <div class="avt">
                <div>
                    <div>
                        <span>
                            <img alt="{{ $project->program->partner->name }}" src="{{ url($project->program->partner->image)}}" decoding="async" data-nimg="fill" class="lazyload">
                        </span>
                    </div>
                </div>
            </div>
            <div class="organization-name">
                {{ $project->program->partner->name }}
            </div>
            <div class="days-left">


                <span class="badge-date-left">
                    @if ($project->program->current_collect_amount >= $project->program->total_collect_amount)
                    {{trans('home.dat_muc_tieu')}}
                    @else
                    @if ($project->program->day_left > 0)
                    {{trans('home.section_article1_left', ['day_left' => $project->program->day_left])}}
                    @else
                    {{trans('home.da_het_thoi_han')}}
                    @endif
                    @endif

                </span>
            </div>
        </div>
        <div class="dn-money">
            <strong>{{ number_format($project->program->current_collect_amount) }}{{\App\Helpers::getDisplaySignAmount($project->program->donation_type)}}</strong>
            <span>/{{ number_format($project->program->total_collect_amount) }}{{\App\Helpers::getDisplaySignAmount($project->program->donation_type)}}</span>
        </div>
        <div class="dn-progress">
            <div class="dn-progress-bar" style="width:{{ number_format($project->program->collect_percent) }}%"></div>
        </div> -->
        <div class="dn-result">
            <div class="grow">
                <div>{{ trans('home.section_article1_date') }}</div>
                <div>{{ trans('home.thu_2') }}, {{ trans('home.thu_4') }}, {{ trans('home.thu_6') }}</div>
            </div>
            <div class="grow">
                <div>{{ trans('home.section_article1_time') }}</div>
                <div>18:30 - 21:00
                </div>
            </div>

        </div>
        <div class="dn-result">
            <div class="grow">
                <div>{{ trans('home.section_article1_place') }}</div>
                <div>Onlab/Online</div>
            </div>
            <div class="grow">
                <div>{{ trans('home.section_article1_fee') }}</div>
                <div>{{ number_format(200) }} USD
                </div>
            </div>
            <div class="grow">
            </div>
        </div>
        <div class="grow">
                @if ($project->name=='Programming Fundamentals' || $project->name=='Graphic Design' || $project->name=='Microsoft Office')
                <a style="margin-top: 4px;
                            width: 100%;
                            text-align: center;
                            text-decoration: none;
                            border: 1px solid orange;
                            padding: 4px 8px;
                            border-radius: 8px;
                            color: red"
                            title="{{ $project->name }}" class="stretched-link" href="{{ route('frontend.main', $project->slug) }}">
                    <span>{{ trans('home.button_quyen_gop') }}</span>
                </a>
                @else
                <a  style="margin-top: 4px;
                            width: 100%;
                            text-align: center;
                            text-decoration: none;
                            border: 1px solid orange;
                            padding: 4px 8px;
                            border-radius: 8px;
                            color: red;" title="{{ $project->name }}" class="stretched-link" href="">
                    <span>{{ trans('home.button_quyen_gop') }}</span>
                </a>
                @endif

            </div>
    </div>
</div>

</div>
