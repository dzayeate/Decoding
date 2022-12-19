@extends('auth.layout.index')

@section('auth')

    <div id="root" class="h-100">
        <!-- Background Start -->
        <div class="fixed-background"></div>
        <!-- Background End -->

        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0 h-100">
                <!-- Left Side Start -->
                <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                    <div class="min-h-100 d-flex align-items-center">
                        <div class="w-100 w-lg-75 w-xxl-50">
                            <div>
                                <h1>Tulisan Tulisan</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left Side End -->

                <!-- Right Side Start -->
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
                        <div class="sw-lg-50 px-5">
                            <div class="sh-11">
                                <a href="/">
                                    <div class="logo-default"></div>
                                </a>
                            </div>
                            <div class="mb-5">
                                <h2 class="cta-1 mb-0 text-primary">Password trouble?</h2>
                                <h2 class="cta-1 text-primary">Renew it here!</h2>
                            </div>
                            <div class="mb-5">
                                <p class="h6">Please use below form to reset your password.</p>
                                <p class="h6">
                                    If you are a member, please
                                    <a href="/login">login</a>
                                    .
                                </p>
                            </div>
                            <div>
                                <form id="resetForm" class="tooltip-end-bottom" novalidate>
                                    <div class="mb-3 filled">
                                        <i data-acorn-icon="lock-off"></i>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                    </div>
                                    <div class="mb-3 filled">
                                        <i data-acorn-icon="lock-on"></i>
                                        <input class="form-control" name="verifyPassword" type="password" placeholder="Verify Password" />
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary">Reset Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Side End -->
            </div>
        </div>
    </div>

@endsection
