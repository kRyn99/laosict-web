@if ($topHaotam)

@foreach ($topHaotam as $index => $donateTop)
<div class="table-line">
    <div class="mr-1 flex w-12 items-center justify-center">
        @if ($index < 3)
        <img src="/frontend/assets/img/icon-top{{$index+1}}.png" alt=""
             class="icon" width="20" height="20">
        @else
            <div class="circle-bg">{{ $index+1 }}</div>
        @endif
    </div>
    <div class="flex-1 text-left">
        <div
            class="mb-1 pt-1">{{\App\Helpers::hiddenPhone($donateTop->phone)}}</div>
    </div>
    <div class="item-end flex justify-end">
        {{ number_format($donateTop->total) }}
        @if ($project->program->donation_type == \App\Helpers::PROGRAM_DONATION_TYPE_MONEY)
            LAK
        @else
            <img src="/frontend/assets/img/icon-heo.png" alt="" class="icon"
                 width="20" height="20">
        @endif
    </div>
</div>
@endforeach
@endif
