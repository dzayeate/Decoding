@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "vertical" }}'];
    $title = 'Dashboard';
    $description= 'Decoding elearning platform course explore.';
@endphp
@extends('admin-layout-dashboard',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/datatables.min.css" />
@endsection

@section('js_vendor')
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
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Hover Start -->
        <section class="scroll-section" id="hover">
            <h2 class="small-title">Avalaible Users</h2>
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
                            <th class="text-muted text-small text-uppercase">Name</th>
                            <th class="text-muted text-small text-uppercase">Users</th>
                            <th class="text-muted text-small text-uppercase">Permissions</th>
                            <th class="text-muted text-small text-uppercase">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-alternate">Member</td>
                            <td class="text-alternate">100 users</td>
                            <td class="text-alternate">-</td>
                            <td>
                                <button class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="eye"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="edit"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="bin"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-alternate">Admin</td>
                            <td class="text-alternate">1 users</td>
                            <td class="text-alternate">-</td>
                            <td>
                                <button class="btn btn-icon btn-icon-only btn-outline-info btn-sm dropdown"
                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="eye"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-only btn-outline-warning btn-sm dropdown"
                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="edit"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-only btn-outline-danger btn-sm dropdown"
                                        data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-acorn-icon="bin"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- Hover Table End -->
                </div>
            </div>
        </section>
        <!-- Hover End -->
    </div>
@endsection
