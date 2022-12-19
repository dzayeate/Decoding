@extends('dashboard.navbar.main')

@section('container')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">School Dashboard</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="Dashboards.Elearning.html">Dashboards</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->

    <!-- Timetable Start -->
    <h2 class="small-title">Timetable</h2>
    <div class="row row-cols-1 row-cols-lg-5 g-2 mb-5">
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                    <p class="text-primary heading mb-4">Monday</p>
                    <div
                        class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                    >
                        <div class="mb-4">
                            <p class="mb-0">Geometry</p>
                            <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Biology</p>
                            <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 text-muted">Lunch</p>
                            <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Language</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Art</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                    <p class="text-primary heading mb-4">Tuesday</p>
                    <div
                        class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                    >
                        <div class="mb-4">
                            <p class="mb-0">Chemistry</p>
                            <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Chemistry</p>
                            <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 text-muted">Lunch</p>
                            <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Physics</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">History</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                    <p class="text-primary heading mb-4">Wednesday</p>
                    <div
                        class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                    >
                        <div class="mb-4">
                            <p class="mb-0">Biology</p>
                            <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Physics</p>
                            <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 text-muted">Lunch</p>
                            <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Gymnastics</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Gymnastics</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                    <p class="text-primary heading mb-4">Thursday</p>
                    <div
                        class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                    >
                        <div class="mb-4">
                            <p class="mb-0">Algebra</p>
                            <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Algebra</p>
                            <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 text-muted">Lunch</p>
                            <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Geometry</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Geometry</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                    <p class="text-primary heading mb-4">Friday</p>
                    <div
                        class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                    >
                        <div class="mb-4">
                            <p class="mb-0">Chemistry</p>
                            <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Physics</p>
                            <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 text-muted">Lunch</p>
                            <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Biology</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">History</p>
                            <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Timetable End -->

@endsection
