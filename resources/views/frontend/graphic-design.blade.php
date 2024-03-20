@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')
    <div class="course-landing-page graphic-design-course">
        <section class="design-course-banner">
            <section class="section-wrapper flex-items-container design-course-banner-content">
                <div class="text-part">
                    <div class="d-flex justify-content-center">
                        <img src="/new-front-end/image/banner-light-bulb.png" style="width:100px !important">
                    </div>
                    <p class="fs-46 ff-popins fw-600">Start <span class="text-red">learning</span> design skill<br>From your favorite Expert</p>
                    <p class="ff-popins fs-22 text-lightgrey">Learn using the advanced hands-on method, and after learning, you can do the job</p>
                    <div class="mt-5">
                        <button class="btn btn-register mr-3" onclick="register()">Explore Course</button>
                        <!-- <img src="/new-front-end/image/circle-yellow-right-arrow.png" width="32px" height="32px">
                        <label class="ff-popins fw-700 fs-18 m-0 align-middle">3 months to become an expert</label> -->
                    </div>
                </div>
                <div class="image-part">
                    <img src="/new-front-end/image/banner-graphic-design-course-inside-part.png">
                </div>
            </section>
        </section>
        <section class="article-wrapper">
            <section class="section-wrapper">
                <img class="mb-5" src="/new-front-end/image/course-samples.png" width="100%" height="100%">
                <div class="flex-items-container">
                    <div class="subjects-info">
                        <p class="fs-40 fw-700 ff-popins">Suitable Subjects</p>
                        <p class="ff-popins fs-16 text-lightgrey">The following subjects are eligible to participate in this course</p>
                        <ul class="subject-list">
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Graphic Designers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Website Designers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Logo Designers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>UI / UX Designers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Product Designers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>T-Shirt Designers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Businesses</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Marketers</li>
                            <li class="ff-popins fs-18"><i class="fas fa-check mr-4"></i>Social Media Experts</li>
                        </ul>
                    </div>
                    <img src="/new-front-end/image/suitable-subjects-image.png" width="60%" height="60%">
                </div>
            </section>
        </section>
        <section class="article-wrapper bg-purple">
            <section class="section-wrapper flex-items-container">
                <img src="/new-front-end/image/result-after-study.png" width="50%">
                <div class="d-flex flex-column justify-content-center">
                    <p class="ff-popins fs-40 fw-700 text-white">Results after studying our COURSE</p>
                    <table class="result-list">
                        <tr>
                            <td><img src="/new-front-end/image/bachelors-hat.png"></td>
                            <td class="ff-popins fs-18 fw-600 text-white">Master and use the PS/Illustrator tool well</td>
                        </tr>
                        <tr>
                            <td><img src="/new-front-end/image/bachelors-hat.png"></td>
                            <td class="ff-popins fs-18 fw-600 text-white">Understand and practice good design thinking</td>
                        </tr>
                        <tr>
                            <td><img src="/new-front-end/image/bachelors-hat.png"></td>
                            <td class="ff-popins fs-18 fw-600 text-white">Master the principles of mixing and matching colors in design</td>
                        </tr>
                        <tr>
                            <td><img src="/new-front-end/image/bachelors-hat.png"></td>
                            <td class="ff-popins fs-18 fw-600 text-white">Basic understanding of letters in graphic design</td>
                        </tr>
                        <tr>
                            <td><img src="/new-front-end/image/bachelors-hat.png"></td>
                            <td class="ff-popins fs-18 fw-600 text-white">Can do well in products such as photo editing, marketing, and communication products, advertisement</td>
                        </tr>
                    </table>
                </div>
            </section>
        </section>
        <section class="article-wrapper">
            <section class="section-wrapper">
                <div class="grid-items-container list-course-content">
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course-design-1.png" width="328">
                        <div class="course-info">
                           <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-20">PHOTOSHOP/CANVA</span>
                                <div class="ff-popins fs-16 text-lightgrey mt-1">
                                <span class="mr-3">10 Sesstions</span>20 Hours
                            </div>

                            </div>
                            <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course-design-2.png" width="328">
                        <div class="course-info">
                           <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-20">ILLUSTRATOR</span>
                                <div class="ff-popins fs-16 text-lightgrey mt-1">
                                <span class="mr-3">10 Sesstions</span>20 Hours
                            </div>

                            </div>
                           <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>
                    <div  class="course-card">
                        <img class="course-img" src="/new-front-end/image/course-design-3.png" width="328">
                        <div class="course-info">
                           <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-20">DESIGN PRINCIPLES</span>
                                 <div class="ff-popins fs-16 text-lightgrey mt-1">
                                <span class="mr-3">8 Sesstions</span>16 Hours
                            </div>

                            </div>
                                 <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course-design-4.png" >
                        <div class="course-info">
                            <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-20">PROJECT</span>
                                <div class="ff-popins fs-16 text-lightgrey mt-1">
                                <span class="mr-3">8 Sesstions</span>16 Hours
                            </div>

                            </div>
                                <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>

                </div>
            </section>
             <section class="section-wrapper">
                <div class="course-description" id="register-form">
                        <div class="course-detail reveal-left">
                            <p class="ff-popins fs-18 text-purple">COURSE CONTENT</p>
                            <p class="ff-popins fs-40 fw-700">Main subjects in this course</p>
                            <p class="ff-popins fs-18 text-lightgrey">Explore visual communication, design principles, typography, and software skills. Master the art of creating impactful and engaging designs.</p>
                        </div>
                        <!-- form gửi thông tin -->
                        <form id="myForm" class="register-form reveal-right" action="{{ route('frontend.graphic-design-post') }}"
                            method="POST" id="feedbackForm">
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

                        <script>
                            document.getElementById("myForm").addEventListener("submit", function(event) {
                                event.preventDefault(); // Ngăn chặn hành động mặc định của biểu mẫu
                                var formData = new FormData(this);

                                // Gửi dữ liệu bằng AJAX
                                $.ajax({
                                    url: "{{ route('frontend.graphic-design-post') }}",
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
                <p class="ff-popins fs-40 fw-700 text-center">Our Experts</p>
                <p class="ff-popins fs-16 text-center text-lightgrey">Guided by a team of experienced experts using a hands-on approach</p>
                <div class="grid-items-container">
                    <div class="card-expert">
                        <div class="card-expert-image mb-3">
                            <img src="/new-front-end/image/user_thumbnail_1.png" width="320" height="220">
                        </div>
                        <p><i class="far fa-play-circle"></i> <span class="ff-popins fs-14 text-lightgrey">20 years Work and teaching</span></p>
                        <p class="ff-popins fw-600 fs-18">Mr. Cuong Nguyen Quoc</p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="ff-popins fs-16 text-lightgrey"><i class="fas fa-user"></i> 2D, 3D, Motion, UX/UI Skills</div>
                            <button class="btn button-view-expert"><i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>

                    <div class="card-expert">
                        <div class="card-expert-image mb-3">
                            <img src="/new-front-end/image/user_thumbnail_2.png" width="320" height="220">
                        </div>
                        <p><i class="far fa-play-circle"></i> <span class="ff-popins fs-14 text-lightgrey">20 years Work and teaching</span></p>
                        <p class="ff-popins fw-600 fs-18">Ms. Thao Le Vu</p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="ff-popins fs-16 text-lightgrey"><i class="fas fa-user"></i> 2D, 3D, Motion, UX/UI Skills</div>
                            <button class="btn button-view-expert"><i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>

                    <div class="card-expert">
                        <div class="card-expert-image mb-3">
                            <img src="/new-front-end/image/user_thumbnail_3.png" width="320" height="220">
                        </div>
                        <p><i class="far fa-play-circle"></i> <span class="ff-popins fs-14 text-lightgrey">20 years Work and teaching</span></p>
                        <p class="ff-popins fw-600 fs-18">Mrs. Hanh Nguyen Hong</p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="ff-popins fs-16 text-lightgrey"><i class="fas fa-user"></i> 2D, 3D, Motion, UX/UI Skills</div>
                            <button class="btn button-view-expert"><i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="article-wrapper">
            <section class="section-wrapper">
                <p class="ff-popins fs-40 fw-700 text-center">Student says About Course</p>
                <p class="ff-popins fs-16 text-center text-lightgrey">Get a feel for the course through the reviews of thousands of students who have attended our Course</p>
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
                                This course is absolutely fantastic! It delivers high-quality content, has professional instructors, and offers a flexible and engaging learning approach.
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
                                The course exceeded my expectations. The well-structured curriculum and popinsactive lessons make learning enjoyable and highly effective.
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
@endsection
