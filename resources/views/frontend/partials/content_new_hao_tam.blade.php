@if ($newHaotam)
@foreach ($newHaotam as $index => $donateNew)
<div class="table-line">
    <div class="mr-1 flex w-12 items-center ">
        <div class="circle-bg">{{ $index }}</div>
    </div>
    <div class="flex-1 text-left">
        <div class="mb-1 pt-1">{{\App\Helpers::hiddenPhone($donateNew->phone)}}</div>
    </div>
    <div class="item-end flex justify-end">
        {{ number_format($donateNew->total) }}
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
