@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Dashboard';
    $description= 'Decoding elearning platform course explore.';
@endphp
@extends('layout-admin-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/datatables.min.css" />
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/datatables.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/datatable.extend.js"></script>
    <script src="/js/plugins/datatable.boxedvariations.js"></script>
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
                <!-- Add Button Start -->
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable">

                        <span><a href="/Admin/CRUD/Course/create"><i data-acorn-icon="plus"></i>Add New</a></span>
                    </button>
                </div>
                <!-- Add Button End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <section class="scroll-section" id="hover">
            <h2 class="small-title">Avalaible Courses</h2>


            <div class="card mb-5">
                <div class="card-body">
                    <!-- Hover Controls Start -->
                    <div class="row">
                        <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                            <div
                                class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                <input class="form-control form-control-sm datatable-search" placeholder="Search"
                                       data-datatable="#datatableHover" />
                                <span class="search-magnifier-icon">
                                        <i data-acorn-icon="search"></i>
                                    </span>
                                <span class="search-delete-icon d-none">
                                        <i data-acorn-icon="close"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                            <div class="d-inline-block">
                                <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                        type="button" data-datatable="#datatableHover">
                                    <i data-acorn-icon="print"></i>
                                </button>

                                <div class="d-inline-block datatable-export" data-datatable="#datatableHover">
                                    <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                            data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                        <i data-acorn-icon="download"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <button class="dropdown-item export-copy" type="button">Copy</button>
                                        <button class="dropdown-item export-excel" type="button">Excel</button>
                                        <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                    </div>
                                </div>
                                <div class="dropdown-as-select d-inline-block datatable-length"
                                     data-datatable="#datatableHover">
                                    <button class="btn btn-outline-muted btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-bs-offset="0,3">
                                        10 Items
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <a class="dropdown-item" href="#">5 Items</a>
                                        <a class="dropdown-item active" href="#">10 Items</a>
                                        <a class="dropdown-item" href="#">20 Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hover Controls End -->

                    <!-- Hover Table Start -->

                    <table class="data-table data-table-pagination data-table-standard responsive nowrap hover"
                           id="datatableHover" data-order='[[ 0, "desc" ]]'>
                        <thead>
                        <tr>
                            <th class="text-muted text-small text-uppercase">Title</th>
                            <th class="text-muted text-small text-uppercase">Chapter</th>
                            <th class="text-muted text-small text-uppercase">Description</th>
                            <th class="text-muted text-small text-uppercase">Category</th>
                            <th class="text-muted text-small text-uppercase">Level</th>
                            <th class="text-muted text-small text-uppercase">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td class="text-alternate">{{$course->title}}</td>
                            <td>{{$course->chapter}}</td>
                            <td class="text-alternate">{{$course->description}}</td>
                            <td class="text-alternate">{!! $course->categories !!}</td>
                            <td class="text-alternate">{{$course->level}}</td>
                            <td>
                                <button class="btn"
                                        type="button" data-bs-offset="0,3">
                                    <a class="btn-icon btn-icon-only btn-outline-info btn-sm" href="/Admin/CRUD/Course/{{$course->id}}">
                                    <i data-acorn-icon="eye"></i>
                                    </a>
                                </button>
                                <button
                                    class="btn" type="button" >
                                    <a class=" btn-icon btn-icon-only btn-outline-warning btn-sm" href="/Admin/CRUD/Course/{{$course->id}}/edit ">
                                    <i data-acorn-icon="edit"></i>
                                    </a>

                                </button>
                                <button
                                    class="btn" type="button">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-icon btn-icon-only btn-outline-danger btn-sm" href="Admin/CRUD/Course/{Course}">
                                    <i data-acorn-icon="bin"></i>

                                    </a>

                                </button></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Hover Table End -->
                </div>
            </div>

        </section>
        <!-- Hover End -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelDefault">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Apakah Anda Yakin Akan Menghapus Course Ini ?</div>
                    <div class="modal-footer">
                        <form action="/Admin/CRUD/Course/{{$course->id}}" method="post" >
                            @csrf
                            @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
