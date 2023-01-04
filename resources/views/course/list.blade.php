@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Course List';
    $description= 'Decoding platform course list.';
@endphp
@extends('layout-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/movecontent.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.list.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <div class="col-auto mb-2 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/Course/Explore">Courses</a></li>
                                </ul>
                            </nav>
                    </div>
                </div>
                <div class="col-auto d-flex d-lg-none align-items-start mb-2 mb-md-0 order-md-1">
                    <button type="button" class="btn btn-primary btn-icon btn-icon-only ms-1" id="menuButton">
                        <i data-acorn-icon="menu-left"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row g-0">

            <div class="col">
                <!-- List Items Start -->
                <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-1.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Advanced React Web Developer Course</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(39)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-2.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Python for Beginners: From Zero to Expert</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(221)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-3 z-index-1">POPULAR</span>
                            <img src="/img/course/small/course-3.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Learn and Understand NodeJS</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(338)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-4.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">HTML 5 - The Complete Guide for Every Level</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-5.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Advanced Techniques with Gulpjs</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(114)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Sass with Full Website</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(84)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-7.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Java - The Complete Guide</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(117)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-8.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">PHP for Beginners with CMS Project</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(53)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-9.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">10 Real Life C++ Projects</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(53)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-10.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Ubuntu: Best Practices for Beginners</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(67)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-2.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Python for Beginners: From Zero to Expert</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(427)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Sass with Full Website</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(84)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-outline-primary sw-25">Load More</button>
                    </div>
                </div>
                <!-- List Items End -->
            </div>
        </div>

        <!-- Menu Content Start -->
        <div class="modal modal-right fade" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Content of below will be moved to #menuColumn or back in here based on the data-move-breakpoint attribute below -->
                        <!-- Content will be here if the screen size is smaller than lg -->
                        <div id="menuMoveContent" data-move-target="#menuColumn" data-move-breakpoint="lg">
                            <div class="menu-items">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Content End -->

        <!-- Content End -->
    </div>
@endsection
