@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_blog">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-35">Articles & News</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Blog</span>
            </div>
        </div>
    </section>
    <section class="margin_vertical_200">
        <div class="container">
            <p class="text-font-dm text-size-50 color-primary-2 text-center text-md-start">Latest Post</p>
            <div>
                <div class="row border  border-radius-50 px-2 py-4 mx-2 mx-md-none" onclick="location.href = '/project_details'">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/page_blog/top.jpg') }}" class="img-fluid border-radius-50"
                            alt="">
                    </div>
                    <div class="col-md-6 ">
                        <div class="container p-md-5">
                            <p class="text-font-dm text-size-25 color-primary-2">Low Cost Latest Invented Interior Designing
                                Ideas</p>
                            <p class="text-font-jost text-size-22 color-primary-4">
                                Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpis dignissim maximus.posuere
                                in.Contrary to popular belief. <br /><br /> Lorem Ipsum is not simply random text. It has
                                roots in a piece of classica.
                            </p>
                            <br>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">26 December,2022</span>
                                <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px" class="clikable"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <p class="text-font-dm text-size-50 color-primary-2 text-center text-md-start">Articles & News</p>
            <div class="row">
                {{-- card --}}
                <div class="col-md-4 mt-5 mt-md-4">
                    <div class="border container border-radius-50 text-center p-4 card-news-hover clikable" onclick="location.href = '/project_details'">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/page_blog/kitchen.jpg') }}" alt=""
                                class="img-fluid border-radius-top-45 w-100 ">
                            <div class="bg-white text-start position-absolute bottom-0 my-3 p-2 start-5 mx-4 border-radius-news-text d-flex justify-content-center align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">Kitchan Design</span>
                            </div>
                        </div>
                        <br>
                        <p class="text-font-dm text-size-25 color-primary-2 text-start">Let’s Get Solution For Building Construction Work</p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <span class="text-font-jost text-size-16 color-primary-16">26 December,2022</span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px"
                            alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-4 mt-5 mt-md-4">
                    <div class="border container border-radius-50 text-center p-4 card-news-hover clikable" onclick="location.href = '/project_details'">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/page_blog/living.jpg') }}" alt=""
                                class="img-fluid border-radius-top-45 w-100 ">
                            <div class="bg-white text-start position-absolute bottom-0 my-3 p-2 start-5 mx-4 border-radius-news-text d-flex justify-content-center align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">Living Design</span>
                            </div>
                        </div>
                        <br>
                        <p class="text-font-dm text-size-25 color-primary-2 text-start">Low Cost Latest Invented Interior Designing Ideas.</p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <span class="text-font-jost text-size-16 color-primary-16">22 December,2022</span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px"
                            alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-4 mt-5 mt-md-4">
                    <div class="border container border-radius-50 text-center p-4 card-news-hover clikable" onclick="location.href = '/project_details'">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/page_blog/interior.jpg') }}" alt=""
                                class="img-fluid border-radius-top-45 w-100 ">
                            <div class="bg-white text-start position-absolute bottom-0 my-3 p-2 start-5 mx-4 border-radius-news-text d-flex justify-content-center align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">Interior Design</span>
                            </div>
                        </div>
                        <br>
                        <p class="text-font-dm text-size-25 color-primary-2 text-start">Best For Any Office & Business Interior Solution</p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <span class="text-font-jost text-size-16 color-primary-16">25 December,2022</span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px"
                            alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                  {{-- card --}}
                  <div class="col-md-4 mt-5 mt-md-5">
                    <div class="border container border-radius-50 text-center p-4 card-news-hover clikable" onclick="location.href = '/project_details'">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/page_blog/kitchen.jpg') }}" alt=""
                                class="img-fluid border-radius-top-45 w-100 ">
                            <div class="bg-white text-start position-absolute bottom-0 my-3 p-2 start-5 mx-4 border-radius-news-text d-flex justify-content-center align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">Kitchan Design</span>
                            </div>
                        </div>
                        <br>
                        <p class="text-font-dm text-size-25 color-primary-2 text-start">Let’s Get Solution For Building Construction Work</p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <span class="text-font-jost text-size-16 color-primary-16">26 December,2022</span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px"
                            alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-4 mt-5 mt-md-5">
                    <div class="border container border-radius-50 text-center p-4 card-news-hover clikable" onclick="location.href = '/project_details'">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/page_blog/living.jpg') }}" alt=""
                                class="img-fluid border-radius-top-45 w-100 ">
                            <div class="bg-white text-start position-absolute bottom-0 my-3 p-2 start-5 mx-4 border-radius-news-text d-flex justify-content-center align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">Living Design</span>
                            </div>
                        </div>
                        <br>
                        <p class="text-font-dm text-size-25 color-primary-2 text-start">Low Cost Latest Invented Interior Designing Ideas.</p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <span class="text-font-jost text-size-16 color-primary-16">22 December,2022</span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px"
                            alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-4 mt-5 mt-md-5">
                    <div class="border container border-radius-50 text-center p-4 card-news-hover clikable" onclick="location.href = '/project_details'">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/page_blog/interior.jpg') }}" alt=""
                                class="img-fluid border-radius-top-45 w-100 ">
                            <div class="bg-white text-start position-absolute bottom-0 my-3 p-2 start-5 mx-4 border-radius-news-text d-flex justify-content-center align-items-center">
                                <span class="text-font-jost text-size-16 color-primary-4">Interior Design</span>
                            </div>
                        </div>
                        <br>
                        <p class="text-font-dm text-size-25 color-primary-2 text-start">Best For Any Office & Business Interior Solution</p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <span class="text-font-jost text-size-16 color-primary-16">25 December,2022</span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" height="52px"
                            alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
            </div>
            <div class="d-flex justify-content-center mt-5">
                <div class="rounded-circle d-flex justify-content-center align-items-center bg-color-primary-3 circle-pagination-circle me-2 clikable">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600">01</span>
                </div>
                <div class="rounded-circle d-flex justify-content-center align-items-center circle-pagination-circle me-2 border-color-primary-1 clikable" onclick="location.href = '/404'">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600">02</span>
                </div>
                <div class="rounded-circle d-flex justify-content-center align-items-center circle-pagination-circle me-2 border-color-primary-1 clikable" onclick="location.href = '/404'">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600">03</span>
                </div>
                <div class="rounded-circle d-flex justify-content-center align-items-center circle-pagination-circle border-color-primary-1 clikable" onclick="location.href = '/404'">
                    <span class="text-font-jost text-size-16 color-primary-2 text-weight-600"> > </span>
                </div>
            </div>
        </div>
    </section>
@endsection
