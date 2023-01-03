@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Dashboards Admin';
    $heading = ' Dashboard Admin';
    $description= 'Decoding elearning platform dashboard.';
@endphp
@extends('layout-admin-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.elearning.js"></script>
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

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Welcome Back, Admin!</h1>
        </div>

        <!-- Line Icons Start -->
        <section class="scroll-section" id="lineIcons">
            <h2 class="small-title">Stats</h2>
            <div class="row g-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card hover-border-primary">
                        <div class="card-body">
                            <div class="heading d-flex justify-content-between lh-1-25 ">
                                <a href="/"><span>Student</span></a>
                                <i data-acorn-icon="office" class="text-primary"></i>
                            </div>
                            <div class="text-small text-muted mb-1">ACTIVE</div>
                            <div class="cta-1 text-primary">1.325</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card hover-border-primary">
                        <div class="card-body">
                            <div class="heading d-flex justify-content-between lh-1-25 ">
                                <span>Quiz</span>
                                <i data-acorn-icon="check-square" class="text-primary"></i>
                            </div>
                            <div class="text-small text-muted mb-1">ACTIVE</div>
                            <div class="cta-1 text-primary">87</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card hover-border-primary">
                        <div class="card-body">
                            <div class="heading d-flex justify-content-between lh-1-25 ">
                                <span>Course</span>
                                <i data-acorn-icon="file-empty" class="text-primary"></i>
                            </div>
                            <div class="text-small text-muted mb-1">RECENT</div>
                            <div class="cta-1 text-primary">45</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card hover-border-primary">
                        <div class="card-body">
                            <div class="heading d-flex justify-content-between lh-1-25 ">
                                <span>Views</span>
                                <i data-acorn-icon="screen" class="text-primary"></i>
                            </div>
                            <div class="text-small text-muted mb-1">THIS MONTH</div>
                            <div class="cta-1 text-primary">1.398</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Line Icons End -->
    </div>
@endsection
