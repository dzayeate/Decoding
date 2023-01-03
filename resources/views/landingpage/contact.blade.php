@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "horizontal" }}'];
    $title = 'Default Dashboard';
    $description = 'Home screen that contains stats, charts, call to action buttons and various listing elements.';
    $breadcrumbs = ["/"=>"Home","/Landingpages"=>"Landingpages"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
@endsection

@section('js_vendor')

    <script src="/js/vendor/intro.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/plyr.min.js"></script>

@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/plugins/carousels.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.default.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="team" id="team">
            <div class="container">
                <div class="team-intro">
                    <h2 class="text-center">Team</h2>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quod.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, dolor!
                        Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, sint.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
