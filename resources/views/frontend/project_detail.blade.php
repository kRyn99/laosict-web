@extends('frontend.layout')

@section('content')
@include('frontend.header')


<nav class="breadcrumb breadcrumb-top text-sm" aria-label="breadcrumb">
    <ol class="mx-auto w-full max-w-6xl px-5 md:px-8 lg:px-8">
        <li>
            <a href="{{ route('frontend.index') }}" aria-label="Home page">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
            </a>
        </li>

        <li>
            <a href="{{ route('frontend.main', $projectCate->slug) }}?id={{$projectCate->id}}"
               aria-label="{{ $projectCate->name }}"
               title="{{ $projectCate->name }}">{{ $projectCate->name }}</a>
        </li>
        <li>
            <span>{{ $project->name }}</span>
        </li>
    </ol>
</nav>
@if ($banner_pc && $banner_mobile)
    @include('frontend.partials.banner')
@endif

<section class="container-fluid course-banner">
    <section class="container course-banner-content">
        <section class="pt-4">
            <p class="fs-18 text-purple">Let's <b>Begins</b></p>
            <p class="fs-64 ff-popins fw-700">Programming Fundamentals <span class="text-purple">Course</span> For you</p>
            <p class="ff-popins fs-18 text-lightgrey">Explore essential programming concepts and build a solid foundation with our Programming Fundamentals Course. Begin your coding journey today!</p>
            <div class="mt-5 d-flex align-items-center">
                <button class="btn btn-register mr-3" onclick="register()">Register</button>
                <img src="/new-front-end/image/circle-yellow-right-arrow.png" width="32px" height="32px">
                <label class="ff-popins fw-700 fs-18 m-0 align-middle ml-2">3 months to become an expert</label>
            </div>
        </section>
        <div>
            <img src="/new-front-end/image/banner-programming-course.png">
        </div>
    </section>
</section>
<section class="container-fluid about-course">
    <section class="container about-course-content">
        <p class="fs-18 ff-popins text-purple">ABOUT COURSE</p>
        <div class="row">
            <div class="col-4">
                <p class="ff-popins fw-700 fs-40">What Do You Get From Us</p>
                <p class="ff-popins fs-18 text-lightgrey">We provide excellent conditions for your development</p>
            </div>
            <div class="col-8 benefit-wrapper">
                <div class="card-benefit">
                    <div class="icon"><i class="fa-regular fa-user"></i></div>
                    <p class="ff-popins fw-700 fs-18 text-white">Professional Teacher</p>
                    <p class="ff-popins fs-14 text-gainsboro">Learn from experienced instructors dedicated to your success.<br>Receive personalized guidance and feedback.</p>
                </div>
                <div class="card-benefit">
                    <div class="icon"><i class="fa-regular fa-user"></i></div>
                    <p class="ff-popins fw-700 fs-18 text-white">Course Certificate</p>
                    <p class="ff-popins fs-14 text-gainsboro">Earn a valuable certificate upon completion.<br>Showcase your skills to advance your career.</p>
                </div>
                <div class="card-benefit">
                    <div class="icon"><i class="fa-regular fa-user"></i></div>
                    <p class="ff-popins fw-700 fs-18 text-white">popinsesting Learning</p>
                    <p class="ff-popins fs-14 text-gainsboro">Enjoy dynamic and engaging lessons.<br>Explore real-world examples for practical understanding.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-end mt-4">
            <button class="btn btn-warning btn-carousel-benefit" onclick="prevCard()"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="btn btn-warning btn-carousel-benefit ml-4" onclick="nextCard()"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </section>
</section>
<section class="container-fluid career-opportunities">
    <section class="container career-opportunities-content">
        <img src="/new-front-end/image/img-career-oppotunities.png">
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
<section class="container-fluid list-course" id="list-course">
    <section class="container list-course-content">
        <div>
            <div class="row-items">
                <div class="course-card">
                    <img src="/new-front-end/image/course_1.png">
                    <div class="course-info">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="ff-popins fw-700 fs-22">LEARN HTML</span>
                            <a class="ff-popins text-purple" href="#">See more</a>
                        </div>
                        <div class="ff-popins fs-16 text-lightgrey">
                            <span class="mr-3">3 Sesstions</span>9 Hours
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <img src="/new-front-end/image/course_2.png">
                    <div class="course-info">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="ff-popins fw-700 fs-22">LEARN CSS</span>
                            <a class="ff-popins text-purple" href="#">See more</a>
                        </div>
                        <div class="ff-popins fs-16 text-lightgrey">
                            <span class="mr-3">6 Sesstions</span>18 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-items">
                <div class="course-card">
                    <img src="/new-front-end/image/course_3.png">
                    <div class="course-info">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="ff-popins fw-700 fs-22">JavaScript</span>
                            <a class="ff-popins text-purple" href="#">See more</a>
                        </div>
                        <div class="ff-popins fs-16 text-lightgrey">
                            <span class="mr-3">9 Sesstions</span>27 Hours
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <img src="/new-front-end/image/course_4.png">
                    <div class="course-info">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="ff-popins fw-700 fs-22">Project</span>
                            <a class="ff-popins text-purple" href="#">See more</a>
                        </div>
                        <div class="ff-popins fs-16 text-lightgrey">
                            <span class="mr-3">5 Sesstions</span>15 Hours
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-description">
            <div>
                <p class="ff-popins fs-18 text-purple">COURSE CONTENT</p>
                <p class="ff-popins fs-40 fw-700">Main subjects in this course</p>
                <p class="ff-popins fs-18 text-lightgrey">Master coding languages, algorithmic thinking, and problem-solving techniques — the core pillars of our programming fundamentals course.</p>
            </div>
            <form class="register-form" action="register.php">
                <p class="ff-popins fs-18 text-center text-yellow">Register now!</p>
                <input type="text" placeholder="Full name" id="fullname">
                <input type="text" placeholder="Email" id="email">
                <input type="text" placeholder="Handphone" id="handphone">
                <input type="text" placeholder="Address" id="address">
                <textarea placeholder="Message" id="message"></textarea>
                <input type="submit" value="Register" class="btn btn-register-form ff-popins fw-700 fs-18">
            </form>
        </div>
    </section>
</section>
<section class="container-fluid testimonials">
    <section class="container testimonials-content">
        <p class="ff-popins fs-40 fw-700 text-center">Testimonials</p>
        <div class="row">
            <div class="col-6 p-2">
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
            </div>

            <div class="col-6 p-2">
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
        </div>
    </section>
</section>

@include('frontend.footer')
@endsection
