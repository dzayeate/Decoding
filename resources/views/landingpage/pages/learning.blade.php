@extends('landingpage.layouts.main')

@section('landingpage-container')

    <!-- Popular Start -->
    <div class="d-flex justify-content-between">
        <h2 class="small-title">Popular</h2>
        <div class="mt-n1">
            <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                <span>View All</span>
                <i data-acorn-icon="chevron-right"></i>
            </button>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-1.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">Advanced React Web Developer Course</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(114)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 24.60</del>
                        </div>
                        <div>$ 18.90</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-2.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">Python for Beginners: From Zero to Expert</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(84)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 33.25</del>
                        </div>
                        <div>$ 22.15</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-3.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">Learn and Understand NodeJS</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(117)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 28.15</del>
                        </div>
                        <div>$ 22.50</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-4.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">HTML 5 - The Complete Guide for Every Level</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(53)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 16.75</del>
                        </div>
                        <div>$ 12.50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular End -->

    <!-- Trending Start -->
    <div class="d-flex justify-content-between">
        <h2 class="small-title">Trending</h2>
        <div class="mt-n1">
            <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                <span>View All</span>
                <i data-acorn-icon="chevron-right"></i>
            </button>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-5.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">Advanced Techniques with Gulpjs</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(53)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 32.50</del>
                        </div>
                        <div>$ 24.80</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">Introduction to Sass with Full Website</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(67)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 27.00</del>
                        </div>
                        <div>$ 13.20</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-7.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">Java - The Complete Guide</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(427)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 48.00</del>
                        </div>
                        <div>$ 28.80</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/course/small/course-8.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body">
                    <h5 class="heading mb-0"><a href="Course.Detail.html" class="body-link stretched-link">PHP for Beginners with CMS Project</a></h5>
                </div>
                <div class="card-footer border-0 pt-0">
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(84)</div>
                    </div>
                    <div class="card-text mb-0">
                        <div class="text-muted text-overline text-small">
                            <del>$ 32.25</del>
                        </div>
                        <div>$ 24.50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending End -->

    <!-- Paths Start -->
    <h2 class="small-title">Paths</h2>
    <div class="row g-3 row-cols-1 row-cols-xl-2 row-cols-xxl-4 mb-5">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">
                        <img src="img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                        <div class="d-flex flex-column sh-5">
                            <a href="Path.List.html" class="heading stretched-link">Frontend Developer</a>
                        </div>
                    </div>
                    <div class="text-muted">Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">
                        <img src="img/illustration/icon-experiment.webp" class="theme-filter" alt="experiment" />
                        <div class="d-flex flex-column sh-5">
                            <a href="Path.List.html" class="heading stretched-link">CSS Mastery</a>
                        </div>
                    </div>
                    <div class="text-muted">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">
                        <img src="img/illustration/icon-storage.webp" class="theme-filter" alt="storage" />
                        <div class="d-flex flex-column sh-5">
                            <a href="Path.List.html" class="heading stretched-link">Webmaster</a>
                        </div>
                    </div>
                    <div class="text-muted">Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop.</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">
                        <img src="img/illustration/icon-accounts.webp" class="theme-filter" alt="people" />
                        <div class="d-flex flex-column sh-5">
                            <a href="Path.List.html" class="heading stretched-link">Backend Developer</a>
                        </div>
                    </div>
                    <div class="text-muted">Cake tart apple pie bear bonbon sugar plum muffin sesame snaps sweet roll gingerbread bonbon sugar.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Paths End -->

@endsection
