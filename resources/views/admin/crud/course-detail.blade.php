@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Course Detail';
    $heading ='Bread Making Techniques';
    $description= ' platform course detail.';
@endphp
@extends('layout-admin-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/plyr.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.detail.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{$course->title}}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Course/Explore">Courses</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xxl-8 mb-5">
                <!-- Preview Start -->
                <div class="card mb-5">
                    <div class="card-img-top player ">
                        <div class="plyr__video-embed sh-50 cover" id="player">
                            <iframe width="100%" height="550"
                                src="{{$course->embed}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                allowfullscreen
                                allowtransparency
                                allow="autoplay"
                            ></iframe>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6>{{$course->description}}</h6>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="/img/profile/profile-12.jpg" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Sandika Galih</a>
                                        <div class="text-muted text-small">Web Programming Unpas</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">4.8K</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Preview End -->

            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xxl-4 mb-n5">
                <!-- At a Glance Start -->
                <h2 class="small-title">At a Glance</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Duration</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">14 Hours</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="presentation" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Chapter</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">{{$course->chapter}} Chapter</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="diploma" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Level</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">{{$course->level}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="calendar" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Release</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">{{$course->created_at}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="star" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Rating</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">4.8 (843)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-0">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="graduation" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Completed By</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">1.522</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- At a Glance End -->

                <!-- Tags Start -->
                <h2 class="small-title">Tags</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Laravel (24)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Programing (3)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Java (1)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Blade (3)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>PHP (5)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>HTML5 (7)</span>
                        </button>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Badges Start -->
                <h2 class="small-title">Badges</h2>
                <div class="card mb-2 sh-15">
                    <div class="card-body text-center align-items-center d-flex flex-row">
                        <div class="d-flex sw-6 sh-6 bg-gradient-light align-items-center justify-content-center rounded-xl position-relative ms-1">
                            <i data-acorn-icon="badge" class="text-white"></i>
                            <div class="achievement bg position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z" />
                                </svg>
                            </div>
                            <div class="achievement level position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ms-5 text-start">
                            <p class="mb-1">Laravel Novice</p>
                            <p class="mb-0 text-primary">Level 1</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-15">
                    <div class="card-body text-center align-items-center d-flex flex-row">
                        <div class="d-flex sw-6 sh-6 bg-gradient-light align-items-center justify-content-center rounded-xl position-relative ms-1">
                            <i data-acorn-icon="medal" class="text-white"></i>
                            <div class="achievement bg position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z" />
                                </svg>
                            </div>
                            <div class="achievement level position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.5989 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ms-5 text-start">
                            <p class="mb-1">Frontend Apprentice</p>
                            <p class="mb-0 text-primary">Level 2</p>
                        </div>
                    </div>
                </div>
                <!-- Badges End -->
            </div>
            <!-- Right Side End -->
        </div>
        <!-- Content End -->
    </div>
@endsection
