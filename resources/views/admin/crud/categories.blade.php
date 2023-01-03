@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Create Categories';
    $description= 'Create Categories';
    $breadcrumbs = ["/Admin/Index"=>"Dashboard Admin"]
@endphp
@extends('layout-admin-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
    <link rel="stylesheet" href="/css/vendor/tagify.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/forms/layouts.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <!-- Floating Label Start -->
                    <section class="scroll-section" id="floatingLabel">
                        <div class="card mb-5">
                            <div class="card-body">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="title" class="form-control" placeholder="Email" />
                                        <label>Title</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Address" rows="3"></textarea>
                                        <label>Description</label>
                                    </div>
                                    <div class="form-floating mb-3 w-100">
                                        <select id="select2FloatingLabel">
                                            <option label="&nbsp;"></option>
                                            <option value="Beginer">Beginer</option>
                                            <option value="Novice">Novice</option>
                                            <option value="Expert">Expert</option>
                                        </select>
                                        <label>Level</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input id="tagsFloatingLabel" />
                                        <label>Content</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="embed" class="form-control" placeholder="Email" />
                                        <label>Embed Youtube</label>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Floating Label End -->
                </div>
                <!-- Content End -->
            </div>
        </div>
    </div>
@endsection
