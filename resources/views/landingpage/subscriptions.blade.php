@php
    $html_tag_data = ["override"=>'{"attributes" : { "placement": "horizontal" }}'];
    $title = 'Pricing';
    $description = 'Pricing Page';
    $breadcrumbs = ["/"=>"Home",]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title Start -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-container">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
        <!-- Title End -->

        <!-- Plans Start -->
        <h2 class="small-title">Choose a Plan</h2>
        <div class="mb-5">
            <div class="row row-cols-1 row-cols-lg-3 g-2">
                <div class="col">
                    <div class="card h-100 hover-scale-up">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i class="text-white" data-acorn-icon="building-small"></i>
                                </div>
                                <div class="cta-4 text-primary mb-1">Stundent</div>
                                <div class="text-muted sh-3 line-through">$ 10.50</div>
                                <div class="display-4">FREE</div>
                            </div>
                            <p class="text-alternate mb-4">
                                Jelly-o jelly oat cake cheesecake halvah. Cupcake sweet roll donut. Sesame snaps lollipop macaroon. Icing tiramisu oat cake pudding danish
                                gummies.
                            </p>
                        </div>
                        <div class="card-footer pt-0 border-0">
                            <div class="mb-4">
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="help" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Forum support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="clipboard" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Access to library Courses & Hot Fix</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                    <i data-acorn-icon="chevron-right"></i>
                                    <span>Purchase</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-scale-up">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i class="text-white" data-acorn-icon="building"></i>
                                </div>
                                <div class="cta-4 text-primary mb-3">Premium</div>
                                <div class="text-muted sh-3"></div>
                                <div class="display-4">$ 12.75</div>
                            </div>
                            <p class="text-alternate mb-4">
                                Danish brownie chocolate bar lollipop cookie tootsie roll candy canes. Jujubes lollipop cheesecake gummi bears cheesecake.
                            </p>
                        </div>
                        <div class="card-footer pt-0 border-0">
                            <div class="mb-4">
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="help" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Forum support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="support" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Direct support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="clipboard" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Access to library Courses</div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                    <i data-acorn-icon="chevron-right"></i>
                                    <span>Purchase</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-scale-up">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column align-items-center mb-4">
                                <div class="bg-gradient-light sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i class="text-white" data-acorn-icon="building-large"></i>
                                </div>
                                <div class="cta-4 text-primary mb-3">Enterprise</div>
                                <div class="text-muted sh-3"></div>
                                <div class="display-4">$ 15.00</div>
                            </div>
                            <p class="text-alternate mb-4 sh-9">Apple pie macaroon sesame snaps cotton candy jelly pudding lollipop caramels marshmallow.</p>
                        </div>
                        <div class="card-footer pt-0 border-0">
                            <div class="mb-4">
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="help" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Forum support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="support" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Direct support</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <div class="sw-3 me-1">
                                            <i class="d-inline-block text-primary align-top" data-acorn-icon="clipboard" data-acorn-size="17"></i>
                                        </div>
                                    </div>
                                    <div class="col lh-1-25 text-alternate">Access to library Courses & Hot Fix</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                    <i data-acorn-icon="chevron-right"></i>
                                    <span>Purchase</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Plans End -->

    </div>
@endsection
