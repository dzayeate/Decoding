@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "horizontal" }}'];
    $title = 'Default Dashboard';
    $description = 'Home screen that contains stats, charts, call to action buttons and various listing elements.';
    $breadcrumbs = ["/"=>"Home","/Landingpages"=>"Landingpages"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/introjs.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/intro.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/plyr.min.js"></script>

@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/plugins/carousels.js"></script>
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.default.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row people">

            <div class="team-intro">
                <h2 class="text-center">Team</h2>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quod.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, dolor!
                    Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, sint.
                </p>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <div class=" text-center">
                    <img style="height: 214px" src="/img/profile/human-2.jpg" alt="images-avatar" >
                    <br></br>
                    <h3 class="team-name">Ayu Putri Dwi Annisa</h3>
                    <p class="team-job">Front-End</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <div class="box text-center">
                    <img src="/img/profile/human-4.jpg" alt="images-avatar" >
                    <br></br>
                    <h3 class="team-name">Fikri Ardiansyah</h3>
                    <p class="team-job">Back-end</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <div class="box text-center">
                    <img src="/img/profile/human-3.jpg" alt="images-avatar" >
                    <br></br>
                    <h3 class="team-name">Asril Dwi Cahya Permana</h3>
                    <p class="team-job">Front-End</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 item">
                <br></br>
                <div class="box text-center">
                    <img src="/img/profile/human-1.jpg" alt="images-avatar" >
                    <br></br>
                    <h3 class="team-name">Agam Ramdhan Kamil Atmaja</h3>
                    <p class="team-job">Leader </p>
                </div>
            </div>
        </div>
    </div>
@endsection
