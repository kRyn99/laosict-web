<div class="donation-item">
    <div class="dn-img aspect-w-15 aspect-h-8">
        <span>
          <!-- assets/img/demo-img-post.jpg => 345 x 184 -->
          <img alt="{{ $project->name }}" src="{{ \App\Helpers::getImageUrlBySize($project->image, 345, 184) }}"
               decoding="async" data-nimg="fill" class="lazyload">
        </span>
    </div>
    <div class="dn-body">
        <div class="dn-title">
            {{ $project->name }}
        </div>
    </div>
    <div class="dn-footer">
        <div>
            <div class="avt">
                <div>
                    <div>
                            <span>
                                <img alt="{{ $project->program->partner->name }}"
                                     src="{{ url($project->program->partner->image)}}" decoding="async" data-nimg="fill"
                                     class="lazyload">
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
        </div>
        <div class="dn-result">
            <div class="grow">
                <div>{{ trans('home.section_article1_turn') }}</div>
                <div>{{ number_format($project->program->total_collect_turn) }}</div>
            </div>
            <div class="grow">
                <div>{{ trans('home.section_article1_get') }}</div>
                <div>{{ number_format($project->program->collect_percent) }}%
                </div>
            </div>
            <div class="grow">
                <a title="{{ $project->name }}" class="stretched-link"
                   href="{{ route('frontend.main', $project->slug.'.html') }}">
                    <span>{{  trans('home.button_quyen_gop') }}</span>
                </a>
            </div>

        </div>
    </div>
</div>
