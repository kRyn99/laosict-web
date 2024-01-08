<div id="modal-donate" class="modal modal-donate-unipay" role="dialog" aria-modal="false" data-reach-dialog-overlay="">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="content" class="modal-donate-cluster modal-cluster" data-reach-dialog-content="">
        <button type="button" class="close-button close-button-modal-donate">
            <img src="/frontend/assets/img/btn-close.png" alt="" class="imgFull lazyload">
        </button>
        <div class="modal-body">
            <div class="modal-body-container">
                <form id="donateForm" method="POST" action="javascript:void(0)">
                    <h4>{{ trans('home.button_quyen_gop') }}</h4>
                    <div>
                        <input type="number" id="amount" name="amount" placeholder="{{ trans('home.nhap_so_tien_donate') }}">
                    </div>
                    <div>
                        <input type="text" id="phone" name="phone" placeholder="{{ trans('home.nhap_so_dt_donate') }}">
                    </div>
                    <div id="donate_form_message" style="display: none;">
                        <span style="color: red"></span>
                    </div>
                    <div>
                        <input type="hidden" name="project_id" id="project_id" value="" />
                        <button type="submit" id="buttonDonateSubmit" class="btn-primary">{{ trans('home.button_donate') }}</button>
                    </div>
                </form>

                <div id="modal_success_content">
                    <div class="success-container">
                        @if (isset($errorPayment) && $errorPayment)
                            <p>{{ $errorPayment }}</p>
                        @else
                            @if (isset($paymentNumber) && isset($billNumber) && isset($amountNumber))
                                @if ($billNumber == \App\Helpers::PAYMENT_ITEM_BILL_NUMBER)
                                    <p>{{ trans('home.donate_success_msg') }} ({{ trans('home.donate_success_sub') }})</p>
                                    <p>{{ trans('home.donate_success_item_number') }}: <span class="money-num">{{ $amountNumber }}</span></p>
                                @else
                                    <p>{{ trans('home.donate_success_msg') }}</p>
                                    <p>{{ trans('home.donate_success_payment_number') }}: <span class="pay-num">{{ $paymentNumber }}</span></p>
                                    <p>{{ trans('home.donate_success_bill_number') }}: <span class="bill-num">{{ $billNumber }}</span></p>
                                    <p>{{ trans('home.donate_success_amount_number') }}: <span class="money-num">{{ $amountNumber }}</span></p>
                                @endif

                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@push('end_scripts')
    <script>
        $(function(){
            $('#buttonDonateSubmit').click(function(e){
                e.preventDefault();
                let amount = $('#amount').val();
                amount = amount.replace(/\D/g,'');
                let phone = $('#phone').val();

                if (!amount || !phone ) {
                    $('#donate_form_message').html("{{ trans('home.fill_all_info') }}").show();
                } else if (phone.length < 8 || phone.length > 15) {
                    $('#donate_form_message').html("{{ trans('home.so_dt_donate_tu_8_15_ky_tu') }}").show();
                } else {
                    $.post('{{ route('frontend.ajax_donate') }}', {
                            amount : amount,
                            phone : phone,
                            project_id : $('#project_id').val(),
                        },
                        function(res) {
                            if (res.success === "1") {
                                $('#donate_form_message').html("").hide();
                                window.location.href = res.data;
                            } else {
                                $('#donate_form_message').html("{{ trans('home.donate_error') }}").show();
                            }
                        });
                }
                return false;
            });
        });

        // $('.btn-donate-popup').on('click', function () {
        //     $('#modal-donate').attr('aria-modal', 'false');
        //     $('#modal-donate-success').attr('aria-modal', 'true');
        //     $('#modal-donate-success .btn-back').click(function(){
        //         $('#modal-donate-success').attr('aria-modal', 'false');
        //     })
        // });
    </script>
@endpush
