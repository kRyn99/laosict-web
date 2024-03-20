@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')
        <div class="course-landing-page">
            <!-- banner -->
            <section class="relative">
                <div class="absolute w-10 h-10 rounded-full"style="background: #CE2029;right: 40%;top: 10%;z-index: 1"></div>
                <div
                    class="absolute w-20 h-20 rounded-full"style="background: #CE2029;right: 56%;bottom: 10%;z-index: 1;opacity:30%">
                </div>
                <div class="banner-microsoft-office relative">
                    <div class="absolute top-0 left-3">
                        <img src="/new-front-end/image/MOP.png" width="60%" height="60%">
                        <div class="w-20 h-20 rounded-full"style="background:#CE2029"></div>
                    </div>
                    <div class="absolute top-0 left-0">
                        <img src="/new-front-end/image/Vector.png" width="60%" height="60%">
                    </div>
                    <div class="left">
                        <div class="fs-46 ff-popins fw-700" style="width:inherit">
                            <p>Microsoft Office</p>
                            <span class="text-purple p-0 block">Course</span>
                            <button class="btn btn-register mr-3" onclick="register()">Register</button>
                        </div>
                    </div>
                    <div class="right">
                        <img class="relative z-1" src="/new-front-end/image/banner-microsoft-office.png" width="100%"
                            height="100%">
                        <div class="absolute"style="bottom: -34px;right: 34px;opacity: 0.5;">
                            <img src="/new-front-end/image/frame.png" width="705" height="705">
                        </div>
                    </div>
                </div>
            </section>

            <section class="article-wrapper">
                <section class="section-wrapper">
                    <div class="mo-course-design">
                        <div class="mo-course-design-left">
                            <p>This course is designed for everyone</p>
                            <span>This course to gain the skill as per your requirement</span>
                        </div>
                        <div class="mo-course-design-right">
                            <div class="column">
                                <div>Accounting</div>
                                <div>Auditing</div>
                                <div>Finance</div>
                                <div>Administration</div>
                            </div>
                            <div class="column">
                                <div>Human Resources</div>
                                <div>Marketing</div>
                                <div>Student</div>
                                <div>Teacher</div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="article-wrapper bg-purple">
                <section class="section-wrapper flex-items-container">
                    <div class="mo-desImage">
                        <img src="/new-front-end/image/image_mo.png" width="100%" height="100%">
                    </div>

                    <div class="d-flex flex-column justify-content-center">
                        <p class="ff-popins fs-40 fw-700 text-white">Knowledge and Skills acquired</p>
                        <table class="result-list">
                            <tr>
                                <td><img src="/new-front-end/image/computer.png"></td>
                                <td class="ff-popins fs-18 fw-600 text-white">Draft, edit, and print text and documents with
                                    Word</td>
                            </tr>
                            <tr>
                                <td><img src="/new-front-end/image/computer.png"></td>
                                <td class="ff-popins fs-18 fw-600 text-white">Calculate and process data effectively with
                                    Excel</td>
                            </tr>
                            <tr>
                                <td><img src="/new-front-end/image/computer.png"></td>
                                <td class="ff-popins fs-18 fw-600 text-white">Design professional presentation slides with
                                    PowerPoint</td>
                            </tr>
                            <tr>
                                <td><img src="/new-front-end/image/computer.png"></td>
                                <td class="ff-popins fs-18 fw-600 text-white">Mastering skills with MS office brings
                                    efficiency to your current work.</td>
                            </tr>

                        </table>
                    </div>
                </section>
            </section>
            <section class="article-wrapper">
                <section class="section-wrapper">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="height:400px">
                                <div class="course-card">
                                    <img class="course-img" src="/new-front-end/image/mo_1.png" width="328">
                                    <div class="course-info">
                                        <div class="d-flex flex-col">
                                            <span class="ff-popins fw-700 fs-20">General Introduction</span>
                                            <div class="ff-popins fs-16 text-lightgrey mt-1">
                                                <span class="mr-3">1 Sesstions</span>3 Hours
                                            </div>
                                        </div>
                                        <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="height:400px">
                                <div class="course-card">
                                    <img class="course-img" src="/new-front-end/image/mo-2.png" width="328">
                                    <div class="course-info">
                                        <div class="d-flex flex-col">
                                            <span class="ff-popins fw-700 fs-20">MICROSOFT WORD </span>
                                            <div class="ff-popins fs-16 text-lightgrey mt-1">
                                                <span class="mr-3">6 Sesstions</span>18 Hours
                                            </div>
                                        </div>
                                        <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="height:400px">
                                <div class="course-card">
                                    <img class="course-img" src="/new-front-end/image/mo-3.png" width="328">
                                    <div class="course-info">
                                        <div class="d-flex flex-col">
                                            <span class="ff-popins fw-700 fs-20">MICROSOFT POWERPOINT</span>
                                            <div class="ff-popins fs-16 text-lightgrey mt-1">
                                                <span class="mr-3">6 Sesstions</span>18 Hours
                                            </div>
                                        </div>
                                        <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="height:400px">
                                <div class="course-card">
                                    <img class="course-img" src="/new-front-end/image/mo-4.png" width="328">
                                    <div class="course-info">
                                        <div class="d-flex flex-col">
                                            <span class="ff-popins fw-700 fs-20">MICROSOFT EXCEL</span>
                                            <div class="ff-popins fs-16 text-lightgrey mt-1">
                                                <span class="mr-3">6 Sesstions</span>18 Hours
                                            </div>
                                        </div>
                                        <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="height:400px">
                                <div class="course-card">
                                    <img class="course-img" src="/new-front-end/image/mo-5.png" width="328">
                                    <div class="course-info">
                                        <div class="d-flex flex-col">
                                            <span class="ff-popins fw-700 fs-20">COURSE CONCLUSION</span>
                                            <div class="ff-popins fs-16 text-lightgrey mt-1">
                                                <span class="mr-3">1 Sesstions</span>3 Hours
                                            </div>
                                        </div>
                                        <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next" style="display:none"></div>
                        <div class="swiper-button-prev " style="display:none"></div>
                    </div>
                </section>
                <section class="section-wrapper">
                    <div class="course-description" id="register-form">
                        <div class="course-detail reveal-left">
                            <p class="ff-popins fs-40 text-purple">Liên Hệ</p>
                            <p>Điền và gửi thông tin theo mẫu bên cạnh để nhận tư vấn miễn phí về khóa học, hoặc liên hệ trực tiếp với chúng tôi theo:</p>
                            <div class="contact">
                                <div class="contact_left">
                                    <img src="/new-front-end/image/location2.svg" style="width:40%">
                                </div>
                                <div class="contact_right">
                                    <span class="ff-popins fs-20 text-purple block">Địa Chỉ</span>
                                    <span><span class="text-black text-opacity-50"> </span>{{ trans('settings.company_address') }}</span>
                                </div>
                            </div>

                            <div class="contact">
                                <div class="contact_left">
                                    <img src="/new-front-end/image/phone-call.svg" style="width:40%">
                                </div>
                                <div class="contact_right">
                                    <span class="ff-popins fs-20 text-purple block">Hotline/Zalo</span>
                                    <p><span class="text-black text-opacity-50"> </span> {{ \App\Helpers::getSettings($settings, 'company_tel') }}</p>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="contact_left">
                                    <img src="/new-front-end/image/email.svg" style="width:40%">
                                </div>
                                <div class="contact_right">
                                    <span class="ff-popins fs-20 text-purple block">Email</span>
                                    <p><span class="text-black text-opacity-50"></span> {{ \App\Helpers::getSettings($settings, 'company_email') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- form gửi thông tin -->
                        <form id="myForm" class="register-form reveal-right"
                            action="{{ route('frontend.microsoft-ofice-post') }}" method="POST" id="feedbackForm">
                            {{ csrf_field() }}

                            <p class="ff-popins fs-18 text-center text-yellow">Register now!</p>
                            <input type="text" placeholder="{{ trans('home.feedback_name') }}" id="name"
                                name="name" required>
                            <input type="number" placeholder="{{ trans('home.feedback_phone') }}" id="phone"
                                name="phone" required>
                            <input type="email" placeholder="{{ trans('home.feedback_email') }}" id="email"
                                name="email" required>

                            <select id="options" onchange="updateInputValue()" name="options" required>
                                <option value="">{{ trans('home.ban_la') }}</option>
                                <option value="{{ trans('home.doi_tuong') }}">{{ trans('home.doi_tuong') }}</option>
                                <option value="{{ trans('home.nguoi_di_lam') }}">{{ trans('home.nguoi_di_lam') }}
                                </option>
                                <option value="{{ trans('home.hoc_sinh') }}">{{ trans('home.hoc_sinh') }}</option>
                                <option value="{{ trans('home.doi_tuong_khac') }}">{{ trans('home.doi_tuong_khac') }}
                                </option>
                            </select>
                            <input type="hidden" name="work" id="work" readonly required>

                            <script>
                                function updateInputValue() {
                                    var selectElement = document.getElementById("options");
                                    var selectedOption = selectElement.options[selectElement.selectedIndex].text;
                                    var check = document.getElementById("work").value;

                                    document.getElementById("work").value = selectedOption;
                                }
                            </script>

                            <textarea placeholder="{{ trans('home.feedback_content') }}" id="message" name="message"></textarea>

                            <div class="mb-4" id="feedback_form_message" style="display: none;">
                                <span style="color: red">{{ trans('home.fill_all_info') }}</span>
                            </div>


                            <button id="buttonSubmitFeedback" type="submit"
                                class="btn btn-register-form ff-popins fw-700 fs-18">{{ trans('home.feedback_gui') }}</button>
                        </form>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.getElementById("myForm").addEventListener("submit", function(event) {
                                event.preventDefault(); // Ngăn chặn hành động mặc định của biểu mẫu
                                var formData = new FormData(this);

                                // Gửi dữ liệu bằng AJAX
                                $.ajax({
                                    url: "{{ route('frontend.microsoft-ofice-post') }}",
                                    type: "POST",
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function(response) {
                                        Swal.fire({
                                            title: response.success,
                                            text: "LaosICT Center "+response.thank,
                                            icon: "success",
                                            onClose: function() {
                                                $('#myForm')[0].reset(); // Đặt lại form về trạng thái rỗng
                                            }
                                        });
                                    },
                                    error: function(xhr, status, error) {
                                        // Xử lý lỗi (nếu có)
                                    }
                                });
                            });
                        </script>


                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>

                            <script>
                                // Cuộn đến form sau khi trang tải lại
                                window.onload = function() {
                                    document.getElementById('myForm').scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                };
                            </script>
                        @endif
                    </div>
                </section>
            </section>
            </section>
            <section class="article-wrapper">
                <section class="section-wrapper">
                    <p class="ff-popins fs-40 fw-700 text-center">Requirements</p>
                    <div class="flex gap-10 justify-between align-center flex-wrap">
                        <div class="flex gap-5 justify-center flex-1" style="align-items:center">
                            <img style="object-fit: contain" src="/new-front-end/image/mo_f_2.png" alt=""
                                width="30">
                            <span style="color:#827A7A">Students need a laptop when participating in this course </span>
                        </div>
                        <div class="flex gap-5  justify-center flex-1" style="align-items:center">
                            <img style="object-fit: contain" src="/new-front-end/image/mo_f_1.png" alt=""
                                width="30">
                            <span style="color:#827A7A">Microsoft Office Installed in your laptop</span>
                        </div>
                    </div>
                </section>
            </section>
            <section class="article-wrapper">
                <section class="section-wrapper">
                    <p class="ff-popins fs-40 fw-700 text-center">Student says About Course</p>
                    <p class="ff-popins fs-16 text-center text-lightgrey">Get a feel for the course through the reviews of
                        thousands of students who have attended our Course</p>
                    <div class="grid-items-container student-list">
                        <div class="card-student">
                            <div>
                                <img src="/new-front-end/image/student-thumbnail-1.png" style="width:160px;height:200px">
                            </div>
                            <div class="d-flex flex-column justify-content-between">
                                <ul class="rate">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <h4 class="ff-popins fw-600">Best learning platform</h4>
                                <q class="ff-popins fs-14 text-lightgrey">
                                    This course is absolutely fantastic! It delivers high-quality content, has professional
                                    instructors, and offers a flexible and engaging learning approach.
                                </q>
                                <div class="ff-popins fw-700 fs-14">Maurice Cain</div>
                                <div class="ff-popins fs-14 text-lightgrey">Student</div>
                            </div>
                        </div>

                        <div class="card-student">
                            <div>
                                <img src="/new-front-end/image/student-thumbnail-2.png" width="160" height="200">
                            </div>
                            <div class="d-flex flex-column justify-content-between">
                                <ul class="rate">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <h4 class="ff-popins fw-600">Amazing Course</h4>
                                <q class="ff-popins fs-14 text-lightgrey">
                                    The course exceeded my expectations. The well-structured curriculum and popinsactive
                                    lessons make learning enjoyable and highly effective.
                                </q>
                                <div class="ff-popins fw-700 fs-14">Lila Henderson</div>
                                <div class="ff-popins fs-14 text-lightgrey">Student</div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        @include('frontend.footer')
    </div>
@endsection
@section('after_scripts')
    <script type="text/javascript">
        const revealLeftElement = document.querySelector('.reveal-left');
        window.addEventListener('scroll', () => {
            const revealPosition = revealLeftElement.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (revealPosition < windowHeight) {
                revealLeftElement.classList.add('active');
            }
        });
        const revealRightElement = document.querySelector('.reveal-right');
        window.addEventListener('scroll', () => {
            const revealPosition = revealRightElement.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (revealPosition < windowHeight) {
                revealRightElement.classList.add('active');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 40,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                '0': {
                    slidesPerView: 1,
                },
                '600': {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                '1024': {
                    slidesPerView: 3,
                    spaceBetween: 40,
                }
            }

        });
    </script>
@endsection
