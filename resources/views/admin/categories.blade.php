@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Categories ';
    $description= 'A table enhancing plug-in for the jQuery Javascript library, adding sorting, paging and filtering abilities to plain HTML tables with minimal effort.';
    $breadcrumbs = ["/Admin/Index"=>"Home"]
@endphp
@extends('admin-layout-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/datatables.min.css"/>
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
        <div class="row">
            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                            @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                            <!-- Add New Button Start -->
                            <a class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto" role="button" href="/"> <i data-acorn-icon="plus"></i> Add New</a>
                            <!-- Add New Button End -->

                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->


                <!-- Content Start -->
                <!-- Hover Start -->
                <section class="scroll-section" id="hover">
                    <h2 class="small-title">Avalaible Categories</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <!-- Hover Controls Start -->
                            <div class="row">
                                <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                                    <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                                        <input class="form-control form-control-sm datatable-search" placeholder="Search" data-datatable="#datatableHover" />
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
                                        <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print" type="button" data-datatable="#datatableHover">
                                            <i data-acorn-icon="print"></i>
                                        </button>

                                        <div class="d-inline-block datatable-export" data-datatable="#datatableHover">
                                            <button
                                                class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                                data-bs-toggle="dropdown"
                                                type="button"
                                                data-bs-offset="0,3"
                                            >
                                                <i data-acorn-icon="download"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <button class="dropdown-item export-copy" type="button">Copy</button>
                                                <button class="dropdown-item export-excel" type="button">Excel</button>
                                                <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                            </div>
                                        </div>
                                        <div class="dropdown-as-select d-inline-block datatable-length" data-datatable="#datatableHover">
                                            <button
                                                class="btn btn-outline-muted btn-sm dropdown-toggle"
                                                type="button"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-bs-offset="0,3"
                                            >
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
                            <table
                                class="data-table data-table-pagination data-table-standard responsive nowrap hover"
                                id="datatableHover"
                                data-order='[[ 0, "desc" ]]'
                            >
                                <thead>
                                <tr>
                                    <th class="text-muted text-small text-uppercase">Label</th>
                                    <th class="text-muted text-small text-uppercase">Parent</th>
                                    <th class="text-muted text-small text-uppercase">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-alternate">Novice</td>
                                    <td class="text-alternate">Level</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">Beginner</td>
                                    <td class="text-alternate">Level</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">Expert</td>
                                    <td class="text-alternate">Level</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">HTML</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">CSS</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">JavaScript</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">PHP</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">Python</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">Ruby</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">C#</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>
                                <tr>
                                    <td class="text-alternate">C++</td>
                                    <td class="text-alternate">Category</td>
                                    <td ><button
                                            class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="eye"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="edit"></i>
                                        </button><button
                                            class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                            data-bs-toggle="dropdown"
                                            type="button"
                                            data-bs-offset="0,3"
                                        >
                                            <i data-acorn-icon="bin"></i>
                                        </button></td>
                                </tr>

                                </tbody>
                            </table>
                            <!-- Hover Table End -->
                        </div>
                    </div>
                </section>
                <!-- Hover End -->
            </div>
            <!-- Content End -->
        </div>
    </div>
    </div>
    </div>
@endsection
