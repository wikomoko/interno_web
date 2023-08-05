@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_project">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">Our Project</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Project</span>
            </div>
        </div>
    </section>
    <section class="margin_vertical_200">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <ul class="nav nav-pills nav-justified border border-1 border-radius-18 border-color-primary-1">
                        <li class="nav-item ">
                            <a class="nav-link height-75 d-flex justify-content-center align-items-center color-primary-2 text-font-jost text-weight-600 text-size-18 tab_hover border-radius-18"
                                href="#">Bathroom</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link bg-color-primary-1 height-75 d-flex justify-content-center align-items-center text-white text-font-jost text-weight-600 text-size-18 border-radius-18"
                                aria-current="page" href="#">Bed Room</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link height-75 d-flex justify-content-center align-items-center color-primary-2 text-font-jost text-weight-600 text-size-18 tab_hover border-radius-18"
                                href="#">Kitchan</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link height-75 d-flex justify-content-center align-items-center color-primary-2 text-font-jost text-weight-600 text-size-18 tab_hover border-radius-18" href="#">Living Area</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row grid-container">
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_1.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Minimal Bedroom</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_2.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Minimal Bedroom</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_3.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Classic Minimal Bedroom</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_4.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Modern Bedroom</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_5.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Minimal Bedroom Table</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_6.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">System Table</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_7.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Modern Bedroom</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="clikable">
                        <img src="{{ asset('assets/img/page_project/bed_room_8.jpg') }}" class="img-fluid w-100" alt="">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-font-dm text-size-25 color-primary-2">Modern Bedroom</span>
                                <br>
                                <span class="text-font-jost text-size-22 color-primary-4">Decor / Architecture</span>
                            </div>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" class="circle-go-button" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <div class="rounded-circle d-flex justify-content-center align-items-center bg-color-primary-3 circle-pagination-circle me-2 clikable">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600">01</span>
                </div>
                <div class="rounded-circle d-flex justify-content-center align-items-center circle-pagination-circle me-2 border-color-primary-1 clikable">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600">02</span>
                </div>
                <div class="rounded-circle d-flex justify-content-center align-items-center circle-pagination-circle me-2 border-color-primary-1 clikable">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600">03</span>
                </div>
                <div class="rounded-circle d-flex justify-content-center align-items-center circle-pagination-circle border-color-primary-1 clikable">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600"> > </span>
                </div>
            </div>
        </div>
    </section>
    <section>

    </section>
@endsection
