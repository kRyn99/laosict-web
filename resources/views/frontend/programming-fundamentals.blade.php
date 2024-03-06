
@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')
    <div class="course-landing-page programming-fundamentals-course">
        <section class="course-banner">
            <section class="section-wrapper flex-items-container">
                <section class="pt-4">
                    <p class="fs-18 text-purple">Let's <b>Begins</b></p>
                    <p class="fs-46 ff-popins fw-700">Programming Fundamentals <span class="text-purple">Course</span> For you</p>
                    <p class="ff-popins fs-18 text-lightgrey">Explore essential programming concepts and build a solid foundation with our Programming Fundamentals Course. Begin your coding journey today!</p>
                    <div class="mt-5 d-flex align-items-center">
                        <button class="btn btn-register mr-3" onclick="register()">Register</button>
                        <img src="/new-front-end/image/circle-yellow-right-arrow.png" style="width:32px;height:32px">
                        <label class="ff-popins fw-700 fs-18 m-0 align-middle ml-2">3 months to become an expert</label>
                    </div>
                </section>
                <div class="course-banner-image">
                    <img src="/new-front-end/image/banner-programming-course.png">
                </div>
            </section>
        </section>
        <section class="article-wrapper">
            <section class="section-wrapper">
                <p class="fs-18 ff-popins text-purple text-center">ABOUT COURSE</p>
                <div class="flex-items-container" style="justify-content: center; text-align:center">
                    <div>
                        <p class="ff-popins fw-700 fs-40">What Do You Get From Us?</p>
                        <p class="ff-popins fs-18 text-lightgrey">We provide excellent conditions for your development</p>
                    </div>
                </div>
                <div class="benefit-wrapper text-white">
                    <div class="card-benefit">
                        <div class="icon"><i class="fa-regular fa-user"></i></div>
                        <p></p>
                        <p class="ff-popins fw-700 fs-18">Professional Teacher</p>
                        <p class="ff-popins fs-14 text-gray">Learn from experienced instructors dedicated to your success.<br>Receive personalized guidance and feedback.</p>
                    </div>
                    <div class="card-benefit">
                        <div class="icon"><i class="fa-regular fa-user"></i></div>
                        <p></p>
                        <p class="ff-popins fw-700 fs-18">Course Certificate</p>
                        <p class="ff-popins fs-14 text-gray">Earn a valuable certificate upon completion.<br>Showcase your skills to advance your career.</p>
                    </div>
                    <div class="card-benefit">
                        <div class="icon"><i class="fa-regular fa-user"></i></div>
                        <p></p>
                        <p class="ff-popins fw-700 fs-18">Interesting Learning</p>
                        <p class="ff-popins fs-14 text-gray">Enjoy dynamic and engaging lessons.<br>Explore real-world examples for practical understanding.</p>
                    </div>
                </div>

            </section>
        </section>
        <section class="article-wrapper bg-purple">
            <section class="section-wrapper flex-items-container">
                <img src="/new-front-end/image/img-career-oppotunities.png" width="50%">
                <div class="d-flex flex-column justify-content-center">
                    <p class="ff-popins fs-18 text-yellow">CAREER OPPOTUNITIES</p>
                    <p class="ff-popins fs-40 fw-700 text-white">Human resource needs in the ICT</p>
                    <p class="ff-popins fs-18 text-gainsboro">Explore the evolving landscape of Information and Communication Technology (ICT) employment demands. Uncover the essential skills and expertise sought after in today's dynamic job market.</p>
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="ff-popins fs-24 fw-700 text-center text-yellow">6,000</div>
                            <div class="ff-popins fs-18 text-center text-gainsboro">ICT Jobs / year</div>
                        </div>
                        <div class="col-4">
                            <div class="ff-popins fs-24 fw-700 text-center text-yellow">4,000</div>
                            <div class="ff-popins fs-18 text-center text-gainsboro">ShortageUser</div>
                        </div>
                        <div class="col-4">
                            <div class="ff-popins fs-24 fw-700 text-center text-yellow">500 USD</div>
                            <div class="ff-popins fs-18 text-center text-gainsboro">Salary</div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="article-wrapper">
            <section class="section-wrapper">
                <div class="grid-items-container list-course-content">
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course_1.png">
                        <div class="course-info">
                            <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-22">LEARN HTML</span>
                                 <div class="ff-popins fs-16 text-lightgrey">
                                <span class="mr-3">3 Sesstions</span>9 Hours
                            </div>

                            </div>

                             <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course_2.png">
                        <div class="course-info">
                            <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-22">LEARN CSS</span>
                                <div class="ff-popins fs-16 text-lightgrey">
                                <span class="mr-3">6 Sesstions</span>18 Hours
                            </div>

                            </div>

                            <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course_3.png">
                        <div class="course-info">
                            <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-22">JavaScript</span>
                                <div class="ff-popins fs-16 text-lightgrey">
                                <span class="mr-3">9 Sesstions</span>27 Hours
                            </div>
                            </div>

                            <a class="ff-popins text-purple mt-2 float-right" href="#">See more</a>
                        </div>
                    </div>
                    <div class="course-card">
                        <img class="course-img" src="/new-front-end/image/course_4.png">
                        <div class="course-info">
                            <div class="d-flex flex-col">
                                <span class="ff-popins fw-700 fs-22">Project</span>
                               <div class="ff-popins fs-16 text-lightgrey">
                                <span class="mr-3">5 Sesstions</span>15 Hours
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
        <section class="article-wrapper">
            <section class="section-wrapper">
                <p class="ff-popins fs-40 fw-700 text-center">Testimonials</p>
                <div class="grid-items-container student-list">
                    <div class="card-testimonial">
                        <div class="d-flex">
                            <img src="/new-front-end/image/user_1.png" width="48" height="48">
                            <div>
                                <div class="ff-popins fw-700 fs-18">Friskidia</div>
                                <div class="ff-popins fs-14 text-lightgrey">Client</div>
                            </div>
                        </div>
                        <ul class="rate">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <q class="ff-popins fs-18 text-lightgrey">
                            This course gave me a solid foundation in programming. The hands-on approach and expert guidance made learning enjoyable and effective.
                        </q>
                    </div>
                    <div class="card-testimonial">
                        <div class="d-flex">
                            <img src="/new-front-end/image/user_2.png" width="48" height="48">
                            <div>
                                <div class="ff-popins fw-700 fs-18">Finkidia</div>
                                <div class="ff-popins fs-14 text-lightgrey">Client</div>
                            </div>
                        </div>
                        <ul class="rate">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <q class="ff-popins fs-18 text-lightgrey">
                            I appreciated the clear explanations and real-world examples. The course certificate boosted my confidence and opened new doors in my career.
                        </q>
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

