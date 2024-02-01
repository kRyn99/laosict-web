
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
                <p class="fs-18 ff-popins text-purple">ABOUT COURSE</p>
                <div class="flex-items-container">
                    <div>
                        <p class="ff-popins fw-700 fs-40">What Do You Get From Us</p>
                        <p class="ff-popins fs-18 text-lightgrey">We provide excellent conditions for your development</p>
                    </div>
                    <div class="benefit-wrapper">
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
                            <p class="ff-popins fw-700 fs-18 text-white">Interesting Learning</p>
                            <p class="ff-popins fs-14 text-gainsboro">Enjoy dynamic and engaging lessons.<br>Explore real-world examples for practical understanding.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-warning btn-carousel-benefit" onclick="prevCard()"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="btn btn-warning btn-carousel-benefit ml-4" onclick="nextCard()"><i class="fa-solid fa-chevron-right"></i></button>
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
                    <div class="course-description" id="register-form">
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
    let currentCardIndex = 0;
    const cards = document.querySelectorAll(".card-benefit");
    const totalCards = cards.length;

    function focusOnCard(index) {
    if (index < 0) {
        currentCardIndex = totalCards - 1;
    } else if (index >= totalCards) {
        currentCardIndex = 0;
    } else {
        currentCardIndex = index;
    }
    cards.forEach((card) => {
        card.style.transform = "translateX(-" + currentCardIndex +  "00%)";
    });
    }

    function prevCard() {
    focusOnCard(currentCardIndex - 1);
    }

    function nextCard() {
    focusOnCard(currentCardIndex + 1);
    }

    function register() {
    // Scroll to the form
    const form = document.getElementById('register-form');
    form.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection