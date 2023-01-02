@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Standard Profile';
    $heading = 'Blaine Cottrell';
    $description = 'Standard Profile Page';
    $breadcrumbs = ["/Dashboards/"=>"Dashboard", "/Dashboards/Profile/standard"=>"Profile"]
@endphp
@extends('layout-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>

    <link rel="stylesheet" href="/css/vendor/dropzone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>

    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/dropzone.min.js"></script>
    <script src="/js/vendor/singleimageupload.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/profile.standard.js"></script>
    <script src="/js/pages/profile.settings.js"></script>

    <script src="/js/cs/dropzone.templates.js"></script>
    <script src="/js/forms/controls.dropzone.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->

            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">Profile</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-column mb-4">
                            <div class="d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                    <img src="/img/profile/killua.jpg" alt="alternate text" class="rounded-xl border border-separator-light border-4 sw-11 sh-11" />
                                </div>
                                <div class="h5 mb-0">Asril Permana</div>
                                <div class="text-muted">
                                    <i data-acorn-icon="pin" class="me-1"></i>
                                    <span class="align-middle">Bandung, Indonesia</span>
                                </div>
                            </div>
                        </div>
                        <div class="nav flex-column" role="tablist">
                            <a class="nav-link active px-0 border-bottom border-separator-light" data-bs-toggle="tab" href="#overviewTab" role="tab">
                                <i data-acorn-icon="activity" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Overview</span>
                            </a>
                            <a class="nav-link px-0" data-bs-toggle="tab" href="#aboutTab" role="tab">
                                <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">About</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5 tab-content">
                <!-- Overview Tab Start -->
                <div class="tab-pane fade show active" id="overviewTab" role="tabpanel">
                    <!-- Public Info Start -->
                    <h2 class="small-title">Public Info</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <form method="post" action="/Dashboards/Profile/{{$user->id}} ">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                        <input type="text" name="name" class="form-control" value="{{$user -> name}}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Birthday</label>
                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                        <input type="text" name="birthday" class="form-control date-picker-close" id="birthday" value="{{$user -> birthday}}" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                        <select name="gender" class="select-single-no-search" data-width="100%" id="genderSelect">
                                            <option label="&nbsp;"></option>
                                            <option value="1">Female</option>
                                            <option value="2">Male</option>
                                            <option value="3">Other</option>
                                            <option value="4">None</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                        <textarea name="bio" class="form-control" rows="3" value="{{$user -> bio}}"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8 col-md-9 col-lg-10">
                                        <input name="email" type="email" class="form-control" value="{{$user -> email}}" disabled />
                                    </div>
                                </div>
                                <div class="position-relative d-inline-block" id="singleImageUploadExample">
                                    <img src="/img/profile/killua.jpg" alt="alternate text" class="rounded-xl border border-separator-light border-4 sw-11 sh-11" />
                                    <button class="btn btn-sm btn-icon btn-icon-only btn-separator-light rounded-xl position-absolute e-0 b-0" type="button">
                                        <i data-acorn-icon="upload"></i>
                                    </button>
                                    <input name="image" class="file-upload d-none" type="file" accept="image/*" />
                                </div>
                                <div class="mb-3 row mt-5">
                                    <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Public Info End -->
                </div>
                <!-- Overview Tab End -->

                <!-- About Tab Start -->
                <div class="tab-pane fade" id="aboutTab" role="tabpanel">
                    <h2 class="small-title">About</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">ME</p>
                                <p>
                                    Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                                    icing. Danish wafer donut cookie caramels gummies topping.
                                </p>
                            </div>
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">INTERESTS</p>
                                <p>
                                    Chocolate cake biscuit donut cotton candy soufflé cake macaroon. Halvah chocolate cotton candy sweet roll jelly-o candy danish dragée.
                                    Apple pie cotton candy tiramisu biscuit cake muffin tootsie roll bear claw cake. Cupcake cake fruitcake.
                                </p>
                            </div>
                            <div>
                                <p class="text-small text-muted mb-2">CONTACT</p>
                                <a href="#" class="d-block body-link mb-1">
                                    <i data-acorn-icon="screen" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">blainecottrell.com</span>
                                </a>
                                <a href="#" class="d-block body-link">
                                    <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">contact@blainecottrell.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Tab End -->
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection
