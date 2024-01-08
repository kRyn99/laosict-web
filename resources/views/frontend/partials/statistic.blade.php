<!-- Nếu <div class="show-numbers"> có 3 div con thì thêm class <div class="show-numbers three-cols">, nếu có 4 div con thì giữ nguyên -->
<div id="statistic_show_numbers" class="show-numbers">
    <div class="jsx-e18afbcea943561a sl-item">
        <h4><span>{{ $data['total_program'] }} + </span></h4>
        <p>{{ trans('home.du_an_gay_quy_thanh_cong') }}</p>
    </div>
    @if ($data['total_amount'] > 0)
    <div class="jsx-e18afbcea943561a sl-item">
        <h4><span>{{ number_format($data['total_amount']) }}</span><span class="jsx-e18afbcea943561a">+ </span></h4>
        <p>{{ trans('home.dong_duoc_quyen_gop') }}</p>
    </div>
    @endif
    @if ($data['total_item'] > 0)
    <div class="jsx-e18afbcea943561a sl-item">
        <h4><span>{{ number_format($data['total_item']) }}</span><span class="jsx-e18afbcea943561a">+ </span></h4>
        <p>{{ trans('home.item_duoc_quyen_gop') }}</p>
    </div>
    @endif
    <div class="jsx-e18afbcea943561a sl-item ">
        <h4><span>{{ $data['total_turn'] }}</span><span class="jsx-e18afbcea943561a">+ </span></h4>
        <p>{{ trans('home.luot_quyen_gop') }}</p>
    </div>
</div>
