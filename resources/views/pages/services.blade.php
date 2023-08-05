@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_services">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">Services</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Services</span>
            </div>
        </div>
    </section>

    <div class="container">

        <section>
            <div class="row work-content">
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <a href="{{ route('services_single') }}">
                        <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Project Plan</h3>
                        <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                        <span class="text-size-18 text-weight-600">
                            Read More
                            <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                        </span>
                    </a>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <a href="{{ route('services_single') }}">
                        <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Interior Work</h3>
                        <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                        <span class="text-size-18 text-weight-600">
                            Read More
                            <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                        </span>
                    </a>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <a href="{{ route('services_single') }}">
                        <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Realization</h3>
                        <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                        <span class="text-size-18 text-weight-600">
                            Read More
                            <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                        </span>
                    </a>
                </div>
            </div>
            <div class="row work-content mt-0">
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <a href="{{ route('services_single') }}">
                        <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">2d/3d Art Work</h3>
                        <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                        <span class="text-size-18 text-weight-600">
                            Read More
                            <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                        </span>
                    </a>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <a href="{{ route('services_single') }}">
                        <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Interior Work</h3>
                        <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                        <span class="text-size-18 text-weight-600">
                            Read More
                            <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                        </span>
                    </a>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <a href="{{ route('services_single') }}">
                        <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Decoration Work</h3>
                        <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                        <span class="text-size-18 text-weight-600">
                            Read More
                            <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="work-step bg-color-primary-3">
                <h1 class="text-size-50 text-font-dm text-weight-400 text-center d-md-block d-none">How We Work</h1>
                <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">How We Work</h1>
                <p class="text-size-22 text-weight-400 text-center d-md-block d-none">It is a long established fact  will be distracted.Lorem Ipsum is simply dummy text of <br> the printing and typesetting industry.</p>
                <p class="text-size-18 text-weight-400 text-center d-md-none">It is a long established fact  will be distracted.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                <div class="work-step-content row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/page_service/img-services-1.svg') }}" class="img-services-content d-md-block mx-auto d-none">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="ps-md-3 pe-md-3">
                            <div class="d-flex justify-content-between">
                                <img src="{{ asset('assets/img/icons/services-1.svg') }}">
                                <h1 class="text-size-120 text-font-dm text-weight-400 text-white">01</h1>
                            </div>
                            <div class="mt-md-5">
                                <h3 class="text-size-35 text-font-dm text-weight-400 text-md-start text-center">Concept & Details</h3>
                                <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                                <p class="text-size-18 text-weight-400 d-md-block d-md-none text-center">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-step-content row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="ps-md-3 pe-md-3">
                            <div class="d-flex justify-content-between">
                                <img src="{{ asset('assets/img/icons/services-2.svg') }}">
                                <h1 class="text-size-120 text-font-dm text-weight-400 text-white">02</h1>
                            </div>
                            <div class="mt-md-5">
                                <h3 class="text-size-35 text-font-dm text-weight-400 text-md-start text-center">Concept & Details</h3>
                                <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                                <p class="text-size-18 text-weight-400 d-md-block d-md-none text-center">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/page_service/img-services-2.svg') }}" class="img-services-content d-md-block mx-auto d-none">
                    </div>
                </div>

                <div class="work-step-content row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/page_service/img-services-3.svg') }}" class="img-services-content d-md-block mx-auto d-none">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="ps-md-3 pe-md-3">
                            <div class="d-flex justify-content-between">
                                <img src="{{ asset('assets/img/icons/services-3.svg') }}">
                                <h1 class="text-size-120 text-font-dm text-weight-400 text-white">03</h1>
                            </div>
                            <div class="mt-md-5">
                                <h3 class="text-size-35 text-font-dm text-weight-400 text-md-start text-center">Concept & Details</h3>
                                <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                                <p class="text-size-18 text-weight-400 d-md-block d-md-none text-center">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-step-content row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="ps-md-3 pe-md-3">
                            <div class="d-flex justify-content-between">
                                <img src="{{ asset('assets/img/icons/services-4.svg') }}">
                                <h1 class="text-size-120 text-font-dm text-weight-400 text-white">04</h1>
                            </div>
                            <div class="mt-md-5">
                                <h3 class="text-size-35 text-font-dm text-weight-400 text-md-start text-center">Concept & Details</h3>
                                <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                                <p class="text-size-18 text-weight-400 d-md-block d-md-none text-center">It is a long established fact  will be distracted. Lorem Ipsum is simply dummy from text of the and typesetting indufstry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/page_service/img-services-4.svg') }}" class="img-services-content d-md-block mx-auto d-none">
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="home-contact text-center">
                <h1 class="text-size-50 text-font-dm text-weight-400 d-md-block d-none">Wanna join the interno?</h1>
                <h1 class="text-size-35 text-font-dm text-weight-400 d-md-none">Wanna join the interno?</h1>
                <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact  will be distracted.</p>
                <p class="text-size-18 text-weight-400 d-md-none">It is a long established fact  will be distracted.</p>
                <x-button.secondary class="mt-3" href="{{ route('contact') }}">Contact With Us</x-button.secondary>
            </div>
        </section>

    </div>
@endsection