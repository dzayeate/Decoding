@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'CRUD Courses';
    $heading = 'CRUD Courses';
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

        <div class="row">

        </div>
    </div>
@endsection
