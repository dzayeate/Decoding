@extends('admin.layout.main')

@section('container')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Dashboards</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboards</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Welcome Back, Admin!</h1>
    </div>
 
    <!-- Stats Start -->
    <h2 class="small-title">Stats</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Student</span>
                                        <i data-acorn-icon="office" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">ACTIVE</div>
                                    <div class="cta-1 text-primary">375</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
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
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Course</span>
                                        <i data-acorn-icon="file-empty" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">RECENT</div>
                                    <div class="cta-1 text-primary">123</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Views</span>
                                        <i data-acorn-icon="screen" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">THIS MONTH</div>
                                    <div class="cta-1 text-primary">1200</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats End -->

@endsection
