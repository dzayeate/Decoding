@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "horizontal" }}'];
    $title = 'Learning Paths';
    $description= 'Acorn elearning platform course explore.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.explore.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <!-- Paths Start -->
        <h2 class="small-title">Paths</h2>
        <div class="row g-3 row-cols-1 row-cols-xl-2 row-cols-xxl-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Frontend Developer</a>
                            </div>
                        </div>
                        <div class="text-muted">Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-experiment.webp" class="theme-filter" alt="experiment" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">CSS Mastery</a>
                            </div>
                        </div>
                        <div class="text-muted">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-storage.webp" class="theme-filter" alt="storage" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Webmaster</a>
                            </div>
                        </div>
                        <div class="text-muted">Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-accounts.webp" class="theme-filter" alt="people" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Backend Developer</a>
                            </div>
                        </div>
                        <div class="text-muted">Cake tart apple pie bear bonbon sugar plum muffin sesame snaps sweet roll gingerbread bonbon sugar.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Paths End -->

        <h2 class="small-title">Sale</h2>
        <div class="row g-3">
            <div class="col-lg-6 mb-5 position-relative">

                <div class="card w-100 sh-24 hover-img-scale-up">
                    <img src="/img/banner/cta-horizontal-short-3.webp" class="card-img h-100 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-3 mb-3 text-white opacity-75 w-75">Introduction to Machine Learning</div>

                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 position-relative">

                <div class="card w-100 sh-24 hover-img-scale-up">
                    <img src="/img/banner/cta-horizontal-short-4.webp" class="card-img h-100 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-3 mb-3 text-white opacity-75 w-75">Basic Robotics Coding with Arduino</div>

                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
