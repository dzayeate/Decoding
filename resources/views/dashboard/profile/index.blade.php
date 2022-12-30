@extends('dashboard.layout.main')

@section('container')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">User Information</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard">Account</a></li>
                        <li class="breadcrumb-item"><a href="/profile">User Info</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Title End -->

            <!-- Top Buttons Start -->
            <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                    <i data-acorn-icon="edit-square"></i>
                    <span>Edit</span>
                </button>
            </div>
            <!-- Top Buttons End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <div class="row">
        <!-- Left Side Start -->
        <div class="col-12 col-xl-4 col-xxl-3">
            <!-- Biography Start -->
            <h2 class="small-title">Profile</h2>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="d-flex align-items-center flex-column mb-4">
                        <div class="d-flex align-items-center flex-column">
                            <div class="sw-13 position-relative mb-3">
                                <img src="img/profile/killua.jpg" class="img-fluid rounded" alt="thumb" />
                            </div>
                            <div class="h5 mb-0">Asril Permana</div>
                            <div class="text-muted">Student</div>
                            <div class="text-muted">
                                <i data-acorn-icon="pin" class="me-1"></i>
                                <span class="align-middle">Bandung, Indonesia</span>
                            </div>
                        </div>
                    </div>
                    <div class="nav flex-column" role="tablist">
                        <a class="nav-link active px-0 border-bottom border-separator-light" data-bs-toggle="tab" href="#overviewTab" role="tab">
                            <i data-acorn-icon="activity" class="me-2" data-acorn-size="17"></i>
                            <span class="align-middle">Overview</span>
                        </a>
                        
                        <a class="nav-link px-0" data-bs-toggle="tab" href="#aboutTab" role="tab">
                            <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                            <span class="align-middle">About</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Biography End -->
        </div>
        <!-- Left Side End -->

        <!-- Right Side Start -->
        <div class="col-12 col-xl-8 col-xxl-9 mb-5 tab-content">

            <!-- Overview Tab Start -->
            <div class="tab-pane fade show active" id="overviewTab" role="tabpanel">

                <!-- Stats Start -->
                <h2 class="small-title">Stats</h2>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Projects</span>
                                        <i data-acorn-icon="office" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">ACTIVE</div>
                                    <div class="cta-1 text-primary">2</div>
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
                                    <div class="text-small text-muted mb-1">PENDING</div>
                                    <div class="cta-1 text-primary">13</div>
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
                                    <div class="cta-1 text-primary">5</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card hover-border-primary">
                                <div class="card-body">
                                    <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                        <span>Learning Time</span>
                                        <i data-acorn-icon="screen" class="text-primary"></i>
                                    </div>
                                    <div class="text-small text-muted mb-1">THIS MONTH</div>
                                    <div class="cta-1 text-primary">21 times</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats End -->

                <!-- Timeline Start -->
                <h2 class="small-title">Timeline</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1"></div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Belajar Laravel</a>
                                            <div class="text-alternate">21.12.2020</div>
                                            <div class="text-muted mt-1">
                                                Jujubes tootsie roll liquorice cake jelly beans pudding gummi bears chocolate cake donut. Jelly-o sugar plum fruitcake bonbon
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link pt-0">Belajar Javascript</a>
                                            <div class="text-alternate">14.12.2020</div>
                                            <div class="text-muted mt-1">
                                                Pudding gummi bears chocolate chocolate apple pie powder tart chupa chups bonbon. Donut biscuit chocolate cake pie topping.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Belajar Bootstrap</a>
                                            <div class="text-alternate">03.11.2020</div>
                                            <div class="text-muted mt-1">
                                                Jelly-o wafer sesame snaps candy canes. Danish dragée toffee bonbon. Jelly-o marshmallow cake oat cake caramels jujubes.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link pt-0">Belajar CSS</a>
                                            <div class="text-alternate">15.10.2020</div>
                                            <div class="text-muted mt-1">Chocolate apple pie powder tart chupa chups bonbon. Donut biscuit chocolate cake pie topping.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                            </div>
                            <div class="col">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link pt-0">Belajar HTML</a>
                                            <div class="text-alternate">08.06.2020</div>
                                            <div class="text-muted mt-1">Chocolate apple pie powder tart chupa chups bonbon. Donut biscuit chocolate cake pie topping.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Timeline End -->

            </div>
            <!-- Overview Tab End -->

            <!-- About Tab Start -->
            <div class="tab-pane fade" id="aboutTab" role="tabpanel">
                <h2 class="small-title">About</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">ME</p>
                            <p>
                            Hello, everyone! My name is Asril Dwi Cahya Permana and I am an Informatics Engineering student at Pasundan University class of 2020.
                            </p>
                        </div>
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">INTERESTS</p>
                            <p>I'm only interest to my girlfriend.</p>
                        </div>
                        <div>
                            <p class="text-small text-muted mb-2">CONTACT</p>
                            <a href="#" class="d-block body-link mb-1">
                                <i data-acorn-icon="screen" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">decoding-team.com</span>
                            </a>
                            <a href="#" class="d-block body-link">
                                <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">asrillper@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Tab End -->
        </div>
        <!-- Right Side End -->
    </div>



@endsection
