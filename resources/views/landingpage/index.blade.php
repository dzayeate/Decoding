@extends('landingpage.layouts.main')

@section('landingpage-container')

    <!-- Banner -->
    <section class="scroll-section" id="titleAndButtons">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="cta-1 mb-4">
                            Online
                            <span class="text-primary">Course</span>
                        </h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, provident!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, officia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, expedita.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, placeat!</p>
                        <a href="#" class="btn btn-gradient-primary me-2">Join Us</a>
                        <a href="#" class="btn btn-outline-primary me-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-5">
                <div class="card w-100 sh-31 hover-img-scale-up">
                    <img src="img/banner/cta-horizontal-short-1.webp" class="card-img sh-31 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Fitur Start -->
    <section class="scroll-section" id="imagesLarge">
        <div class="row">
            <div class="col-xl-4 mb-5">
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="img/illustration/icon-configure.webp" class="theme-filter mb-3" alt="launch" />
                            <h1 class="text-primary">Evaluation Time</h1>
                            <p class="mb-3">Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                expedita eius.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-5">
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="img/illustration/icon-documentation.webp" class="theme-filter mb-3" alt="launch" />
                            <h1 class="text-primary">Certified Teacher</h1>
                            <p class="mb-3">Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                expedita eius.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-5">
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="img/illustration/icon-storage.webp" class="theme-filter mb-3" alt="launch" />
                            <h1 class="text-primary">Video Playlist</h1>
                            <p class="mb-3">Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                expedita eius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fitur End -->

    <!-- Prodak Terbaru Start -->
    <section class="scroll-section" id="flow">
        <div class=" d-flex align-items-center justify-content-center h-100">
            <div class="text-center">
                <h1 class="text-primary">Program Terbaru Kami</h1>
                <p class="mb-3">Bekerja sama dengan partner, kami menyelenggarakan beberapa program untuk mendukung developer Indonesia.</p>
            </div>
        </div>
        <div class="row g-3 mb-5">
            <div class="col-12 p-0 mb-5">
                <div class="glide" id="glideFlow">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="card h-100">
                                    <img src="img/course/small/course-1.webp" class="card-img-top sh-22" alt="card image" />
                                    <div class="card-body">
                                        <h5 class="heading mb-0"><a href=" " class="body-link stretched-link">Advanced React Web Developer Course</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card h-100">
                                    <img src="img/course/small/course-2.webp" class="card-img-top sh-22" alt="card image" />
                                    <div class="card-body">
                                        <h5 class="heading mb-0"><a href=" " class="body-link stretched-link">Python for Beginners: From Zero to Expert</a></h5>
                                    </div>
                                </div>
                        </div>
                            <div class="glide__slide">
                                <div class="card h-100">
                                    <img src="img/course/small/course-3.webp" class="card-img-top sh-22" alt="card image" />
                                    <div class="card-body">
                                        <h5 class="heading mb-0"><a href=" " class="body-link stretched-link">Learn and Understand NodeJS</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card h-100">
                                    <img src="img/course/small/course-4.webp" class="card-img-top sh-22" alt="card image" />
                                    <div class="card-body">
                                        <h5 class="heading mb-0"><a href=" " class="body-link stretched-link">HTML 5 - The Complete Guide for Every Level</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card h-100">
                                    <img src="img/course/small/course-5.webp" class="card-img-top sh-22" alt="card image" />
                                    <div class="card-body">
                                        <h5 class="heading mb-0"><a href=" " class="body-link stretched-link">Advanced Techniques with Gulpjs</a></h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prodak Terbaru End -->


    <!-- Mail List Start -->
    <section class="scroll-section" id="mailList">
        <div class="card mb-5">
            <div class="card-body row g-0 text-center">
                <div class="col-12">
                    <div class="cta-3"><h1>Tunggu apa lagi?</h1>
                        </div>
                    <div class="mb-3 cta-3 text-primary">Belajar lebih terarah dengan learning path dan code review</div>
                    <div class="row gx-2 justify-content-center">
                        <div class="col-12 col-sm-auto">
                            <a href="/register" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>BUAT AKUN</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mail List End -->
@endsection
