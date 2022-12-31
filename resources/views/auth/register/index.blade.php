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
                                <h1>Selamat Datang!</h1>
                                <h5>Decoding adalah sebuah perusahaan startup yang bertujuan mengembangkan ekosistem developer di Indonesia.
                                    Decoding berdiri sejak November 2022, dan memiliki platform pembelajaran elektronik di laman Decoding.com.</h5>
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
                                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                                <h2 class="cta-1 text-primary">let's get the ball rolling!</h2>
                            </div>
                            <div class="mb-5">
                                <p class="h6">Please use the form to register.</p>
                                <p class="h6">
                                    If you are a member, please
                                    <a href="/login">login</a>
                                    .
                                </p>
                            </div>
                            <div>
                                <form action="/register" method="post" id="registerForm" class="tooltip-end-bottom" novalidate>
                                 @csrf
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <i data-acorn-icon="user"></i>
                                        <input class="form-control @error('registerName') is-invalid @enderror" placeholder="Name" name="registerName"
                                         required value="{{ old('registerName') }}" />
                                        @error('registerName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <i data-acorn-icon="email"></i>
                                        <input class="form-control @error('registerEmail') is-invalid @enderror" placeholder="Email" name="registerEmail"
                                         required value="{{ old('registerEmail') }}" />
                                        @error('registerEmail')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <i data-acorn-icon="lock-off"></i>
                                        <input class="form-control @error('registerPassword') is-invalid @enderror" name="registerPassword" type="password" placeholder="Password" required />
                                        @error('registerPassword')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="registerCheck" name="registerCheck" />
                                            <label class="form-check-label" for="registerCheck">
                                                I have read and accept the
                                                <a href="index.html" target="_blank">terms and conditions.</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary">Signup</button>
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
