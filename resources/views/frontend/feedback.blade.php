@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')

        <nav class="breadcrumb breadcrumb-top" aria-label="breadcrumb">
            <ol>
                <li>
                    <a href="{{ route('frontend.index') }}" aria-label="Home page">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    </a>
                </li>
                <li>
                    <span>{{ trans('home.menu_feedback_name') }}</span>
                </li>
            </ol>
        </nav>
        @if ($banner_pc && $banner_mobile)
            @include('frontend.partials.banner')
        @endif
        <div class="pb-10"></div>
        <div class="feedback-wrapper">
            <form action="{{ route('frontend.post_feedback') }}" method="POST" id="feedbackForm">
                {{ csrf_field() }}
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">{{ trans('home.feedback_name') }}</label>
                    <input type="text" id="name" name="name" class="mt-1 pl-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md h-8">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block font-medium text-gray-700">{{ trans('home.feedback_phone') }}</label>
                    <input type="text" id="phone" name="phone" class="mt-1 pl-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md h-8">
                </div>

                <div class="mb-4">
                    <label for="address" class="block font-medium text-gray-700">{{ trans('home.feedback_address') }}</label>
                    <input type="text" id="address" name="address" class="mt-1 pl-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md h-8">
                </div>

                <div class="mb-4">
                    <label for="province_id" class="block font-medium text-gray-700">{{ trans('home.feedback_province') }}</label>
                    <select onchange="onChangeProvince()" id="province_id"  class="mt-1 pl-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md h-8">
                        <option value="">{{ trans('home.choose_province') }}</option>
                        @foreach (\App\Models\Province::all() as $province)
                            <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="district_id" class="block font-medium text-gray-700">{{ trans('home.feedback_district') }}</label>
                    <select id="district_id" name="district_id" class="mt-1 pl-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md h-8">
                        <option value="">{{ trans('home.choose_district') }}</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="email" class="block font-medium text-gray-700">{{ trans('home.feedback_email') }}</label>
                    <input type="email" id="email" name="email" class="mt-1 pl-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md h-8">
                </div>

                <div class="mb-4">
                    <label for="message" class="block font-medium text-gray-700">{{ trans('home.feedback_content') }}</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 pl-4 pt-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md"></textarea>
                </div>
                <div class="mb-4" id="feedback_form_message" style="display: none;">
                    <span style="color: red">{{ trans('home.fill_all_info') }}</span>
                </div>
                <div>
                    <button id="buttonSubmitFeedback" type="submit" class="btn-primary">{{ trans('home.feedback_gui') }}</button>
                </div>
            </form>
        </div>
        <div class="pb-10"></div>

        @include('frontend.footer')
    </div>
@endsection

@section('after_scripts')
    <script>
        function resetSelect(elSelect, labelText) {
            elSelect.find('option')
                .remove()
                .end();
            elSelect.append($('<option>', {
                value: '',
                text : labelText
            }));
        }

        function onChangeProvince() {
            let districtSelect = $('#district_id');
            resetSelect(districtSelect, '{{ trans('home.choose_district') }}');
            let provinceId = $('#province_id').val();
            if (!provinceId) {
                return false;
            }
            $.post('{{ route('frontend.ajax_load_district') }}', { province_id : provinceId}, function (res){

                $.each(res.districts, function (i, item) {
                    districtSelect.append($('<option>', {
                        value: item.id,
                        text : item.district_name
                    }));
                });
            });
        }

        $(function(){
            $('#buttonSubmitFeedback').click(function(e){
                e.preventDefault();
                let name = $('#name').val();
                let phone = $('#phone').val();
                let email = $('#email').val();
                let address = $('#address').val();
                let district_id = $('#district_id').val();
                let message = $('#message').val();

                if (!name || !phone || !email || !address || !message || !district_id) {
                    $('#feedback_form_message').show();
                } else {
                    $('#feedbackForm').submit();
                }
                return false;
            });
        });
    </script>
@endsection
