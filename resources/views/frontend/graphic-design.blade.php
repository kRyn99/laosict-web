
@extends('frontend.layout')

@section('content')
    <div class="wrapper">
        @include('frontend.header')
    <div class="course-landing-page">
        <section class="container-fluid design-course-banner">
            <section class="design-course-banner-content">
                <div class="pt-4">
                    <div class="d-flex justify-content-center">
                        <img src="/new-front-end/image/banner-light-bulb.png">
                    </div>
                    <p class="fs-60 ff-popins fw-600">Start <span class="text-red">learning</span> design skill From your favorite Expert</p>
                    <p class="ff-popins fs-22 text-lightgrey">Embark on your design journey with guidance from industry experts. Unlock creativity and master design skills with our acclaimed courses.</p>
                    <div class="mt-5">
                        <button class="btn btn-register mr-3" onclick="register()">Explore Course</button>
                        <!-- <img src="/new-front-end/image/circle-yellow-right-arrow.png" width="32px" height="32px">
                        <label class="ff-popins fw-700 fs-18 m-0 align-middle">3 months to become an expert</label> -->
                    </div>
                </div>
            </section>
            <img src="/new-front-end/image/banner-graphic-design-course.png">
        </section>
        <section class="container-fluid suitable-subject">
            <section class="section-wrapper suitable-subject-content">
                <img class="mb-5" src="/new-front-end/image/course-samples.png" width="100%" height="100%">
                <div class="d-flex">
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
        <section class="container-fluid career-opportunities">
            <section class="section-wrapper career-opportunities-content">
                <img src="/new-front-end/image/result-after-study.png" width="50%">
                <div class="d-flex flex-column justify-content-center">
                    <p class="ff-popins fs-40 fw-700 text-white">Results after studying our COURSE</p>
                    <ul class="result-list">
                        <li><div><img src="/new-front-end/image/bachelors-hat.png"></div><p class="ff-popins fs-18 fw-600 text-white">Master and use the PS/Illustrator tool well</p></li>
                        <li><div><img src="/new-front-end/image/bachelors-hat.png"></div><p class="ff-popins fs-18 fw-600 text-white">Understand and practice good design thinking</p></li>
                        <li><div><img src="/new-front-end/image/bachelors-hat.png"></div><p class="ff-popins fs-18 fw-600 text-white">Master the principles of mixing and matching colors in design</p></li>
                        <li><div><img src="/new-front-end/image/bachelors-hat.png"></div><p class="ff-popins fs-18 fw-600 text-white">Basic understanding of letters in graphic design</p></li>
                        <li><div><img src="/new-front-end/image/bachelors-hat.png"></div><p class="ff-popins fs-18 fw-600 text-white">Can do well in products such as photo editing, marketing, and communication products, advertisement</p></li>
                    </ul>
                </div>
            </section>
        </section>
        <section class="container-fluid list-course" id="list-course">
            <section class="section-wrapper list-course-content">
                <div>
                    <div class="row-items">
                        <div class="course-card">
                            <img src="/new-front-end/image/course-design-1.png" width="328">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-20">PHOTOSHOP/CANVA</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">10 Sesstions</span>20 Hours
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <img src="/new-front-end/image/course-design-2.png" width="328">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-20">ILLUSTRATOR</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">10 Sesstions</span>20 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-items">
                        <div class="course-card">
                            <img src="/new-front-end/image/course-design-3.png" width="328">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-20">DESIGN PRINCIPLES</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">8 Sesstions</span>16 Hours
                                </div>
                            </div>
                        </div>
                        <div class="course-card">
                            <img src="/new-front-end/image/course-design-4.png" width="328">
                            <div class="course-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="ff-popins fw-700 fs-20">PROJECT</span>
                                    <a class="ff-popins text-purple" href="#">See more</a>
                                </div>
                                <div class="ff-popins fs-16 text-lightgrey">
                                    <span class="mr-3">8 Sesstions</span>16 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-description">
                    <p class="ff-popins fs-18 text-purple">COURSE CONTENT</p>
                    <p class="ff-popins fs-40 fw-700">Main subjects in this course</p>
                    <p class="ff-popins fs-18 text-lightgrey">Explore visual communication, design principles, typography, and software skills. Master the art of creating impactful and engaging designs.</p>
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
        <section class="container-fluid experts">
            <section class="section-wrapper experts-content">
                <p class="ff-popins fs-40 fw-700 text-center">Our Experts</p>
                <p class="ff-popins fs-16 text-center text-lightgrey">Guided by a team of experienced experts using a hands-on approach</p>
                <div class="row">
                    <div class="col-4 p-2">
                        <div class="card-expert">
                            <div>
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
                    </div>

                    <div class="col-4 p-2">
                        <div class="card-expert">
                            <div>
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
                    </div>

                    <div class="col-4 p-2">
                        <div class="card-expert">
                            <div>
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
                </div>
            </section>
        </section>
        <section class="container-fluid students">
            <section class="section-wrapper students-content">
                <p class="ff-popins fs-40 fw-700 text-center">Student says About Course</p>
                <p class="ff-popins fs-16 text-center text-lightgrey">Get a feel for the course through the reviews of thousands of students who have attended our Course</p>
                <div class="row">
                    <div class="col-6 p-2">
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
                    </div>

                    <div class="col-6 p-2">
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
    const form = document.getElementById('list-course');
    form.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection
