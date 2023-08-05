@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_services_single">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">Service Single</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Services Single</span>
            </div>
        </div>
    </section>
    <section>
        <div class="container margin_vertical_200">
            <div class="row">
                <div class="col-md-6 pe-md-5">
                    <p class="text-font-dm color-primary-2 text-size-50 d-none d-md-block">We set the trends of modern living Services.</p>
                    <p class="text-font-dm color-primary-2 text-size-35 d-md-none text-center">We set the trends of modern living Services.</p>
                </div>
                <div class="col-md-6">
                    <p class="text-font-jost color-primary-1 text-size-25">
                        It is a long established fact that a reader will be distracted by the of readable content of a page
                    </p>
                    <br>
                    <p class="text-font-jost color-primary-4 text-size-22 text-justify">
                        when lookings at its layouts the points spriof using that it has a more
                        less normal.A wonderful serenity has taken pgossession of my entire soul, like thesce sweet
                        morndsings of sphring which I enjoy with my forwhole heart. I am alone, and feel the charm of
                        excgistence in this spot, which was created for the bliss of souls like mine.
                    </p>
                    <br>
                    <p class="text-font-jost color-primary-4 text-size-22 text-justify">
                        when lookings at its layouts the points spriof using that it has a more
                        less normal.A wonderful serenity has taken pgossession of my entire soul, like thesce sweet
                        morndsings of sphring which I enjoy with my forwhole heart. I am alone, and feel the charm of
                        excgistence in this spot, which was created for the bliss of souls like mine.
                    </p>
                </div>
            </div>
            <div class="client row d-md-flex justify-content-md-between d-block">
                <div class="col d-flex justify-content-center align-items-center mb-md-0">
                    <img src="{{ asset('assets/img/page_home/client-1.svg') }}"> 
                </div>
                <div class="col d-flex justify-content-center align-items-center mb-md-0">
                    <img src="{{ asset('assets/img/page_home/client-2.svg') }}"> 
                </div>
                <div class="col d-flex justify-content-center align-items-center mb-md-0">
                    <img src="{{ asset('assets/img/page_home/client-3.svg') }}"> 
                </div>
                <div class="col d-flex justify-content-center align-items-center mb-md-0">
                    <img src="{{ asset('assets/img/page_home/client-4.svg') }}"> 
                </div>
                <div class="col d-flex justify-content-center align-items-center mb-md-0">
                    <img src="{{ asset('assets/img/page_home/client-5.svg') }}"> 
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                    <img src="{{ asset('assets/img/page_service_detail/video_img.jpg') }}" class="img-fluid img_round_rectange_pad" alt="">
            </div>
            <div class="container px-md-5 margin_vertical_200">
                <div class="row ">
                    <div class="col-md-5">
                        <ol class="list-group-numbered custom-li">
                            <p class="text-font-dm color-primary-2 text-size-50 d-none d-md-block">Use of Interior</p>
                            <p class="text-font-dm color-primary-2 text-size-35 d-md-none text-center">Use of Interior</p>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">We provide high quality design services. </li>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">Project on time and Latest Design. </li> 
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">Scientific Skills For getting a better result.</li>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">Renovations Benefit of Service </li>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">We are confident about our projects.</li>
                        </ol>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <ol class="list-group-numbered custom-li">
                            <p class="text-font-dm color-primary-2 text-size-50 d-none d-md-block">Make An Art</p>
                            <p class="text-font-dm color-primary-2 text-size-35 d-md-none text-center">Make An Art</p>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">We provide high quality design services. </li>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">Project on time and Latest Design. </li> 
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">Scientific Skills For getting a better result.</li>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">Renovations Benefit of Service</li>
                            <li class="list-group-item text-font-jost color-primary-4 text-size-22">We are confident about our projects.</li>
                        </ol>
                    </div>
                </div>    
            </div> 
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('assets/img/page_service_detail/chair_and_table.jpg') }}" class="img-fluid img_round_rectange_pad" alt="">
                </div>
                {{-- <div class="col-md-1"></div> --}}
                <div class="col-md-5">
                    <div class="container p-3">
                        <p class="text-font-dm color-primary-2 text-size-50 d-none d-md-block">We love design.That's how we got here.</p>
                        <p class="text-font-dm color-primary-2 text-size-35 d-md-none text-center">We love design.That's how we got here.</p>
                        <p class="text-font-jost color-primary-2 text-size-22">It is a long established fact that a reader will be distracted by the of readable content .</p>
                        <div class="text-center text-md-start">
                            <x-button.primary onclick="location.href = '/project'">
                                Our Portofolio
                            </x-button.primary>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section>
    <section>
        <div class="amount">
            <div class="container">
                <div class="row">
                    <div class="amount-content col-md-3 text-center">
                        <h1 class="text-size-85 text-font-dm text-weight-400">12</h1>
                        <p class="text-size-22 text-weight-400">Years Of Experiance</p>
                    </div>
                    <div class="amount-content col-md-3 text-center">
                        <h1 class="text-size-85 text-font-dm text-weight-400">85</h1>
                        <p class="text-size-22 text-weight-400">Success Project</p>
                    </div>
                    <div class="amount-content col-md-3 text-center">
                        <h1 class="text-size-85 text-font-dm text-weight-400">15</h1>
                        <p class="text-size-22 text-weight-400">Active Project</p>
                    </div>
                    <div class="amount-content col-md-3 text-center" style="border: none;">
                        <h1 class="text-size-85 text-font-dm text-weight-400">95</h1>
                        <p class="text-size-22 text-weight-400">Happy CUstomers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
