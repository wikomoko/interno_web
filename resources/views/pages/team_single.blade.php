@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_team_single">
            <div class="pad_banner_team_single text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">Professional Single</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Team Single</span>
            </div>
        </div>
    </section>

    <section>
        <div class="container margin_top_150 mb-0">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/page_team_single/img-team-1.svg') }}" class="img-personal-team border-radius-50 d-block mx-md-0 mx-auto">
                </div>
                <div class="col-md-6">
                    <div class="personal-team-information text-md-start text-center mt-md-0 mt-3">
                        <h1 class="text-size-50 text-font-dm text-weight-400">John Smith</h1>
                        <span class="text-size-22 text-weight-400">Designer</span>
                        <p class="text-size-22 text-weight-400 mt-4 text-justify">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in. Contrpobelie frandomised words which don't look even slightly believable.</p>
                        <div class="d-md-flex align-items-center d-block mt-4">
                            <img src="{{ asset('assets/img/icons/mail-circle.svg') }}">
                            <span class="text-size-20 text-weight-400 ms-3">info@yourdomain.com</span>
                        </div>
                        <div class="d-md-flex align-items-center d-block mt-4">
                            <img src="{{ asset('assets/img/icons/call-circle-bold.svg') }}" width="52">
                            <span class="text-size-20 text-weight-400 ms-3">+1 (378) 400-1234</span>
                        </div>
                        <div class="d-md-flex align-items-center d-block mt-4">
                            <img src="{{ asset('assets/img/icons/web-circle.svg') }}">
                            <span class="text-size-20 text-weight-400 ms-3">www.yourdomain.com</span>
                        </div>
                        <div class="d-md-flex align-items-center d-block mt-5">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" class="ms-4">
                            <img src="{{ asset('assets/img/icons/linkedin.svg') }}" class="ms-4">
                            <img src="{{ asset('assets/img/icons/instagram.svg') }}" class="ms-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container margin_top_77">
            <h1 class="text-size-50 text-font-dm text-weight-400 text-md-start text-center">Short Biography​</h1>
            <p class="text-size-22 text-weight-400 text-justify mt-4">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, njecthumour</p>
            <p class="text-size-22 text-weight-400 text-justify mt-4">Embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined but the majority have suffered alteration in some form chunks as necessary.</p>
        </div>
    </section>

    <section>
        <div class="container margin_top_77">
            <div class="row">
                <div class="col-md-6 text-justify pe-md-4">
                    <h3 class="text-size-25 text-font-dm text-weight-400 text-md-start text-center">Simplicity and Functionality</h3>
                    <p class="text-size-22 text-weight-400 mt-4">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in belief.</p>
                    <p class="text-size-22 text-weight-400 mt-4">There are many variations of passages of Lorem Ipsum from available, but the majority have suffered alteration in some form, njecthumour</p>
                    <div class="mt-3">
                        <label for="customRange1" class="form-label text-size-22 text-weight-500 text-md-start text-center">Project Design</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                    <div class="mt-3">
                        <label for="customRange1" class="form-label text-size-22 text-weight-500 text-md-start text-center">Team Management</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                    <div class="mt-3">
                        <label for="customRange1" class="form-label text-size-22 text-weight-500 text-md-start text-center">Client Satisfaction</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                </div>
                <div class="col-md-6 text-justify ps-md-5 mt-md-0 mt-5">
                    <h3 class="text-size-25 text-font-dm text-weight-400 text-md-start text-center">Question and Answer</h3>
                    <p class="text-size-22 text-weight-400 mt-4">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.</p>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="team-single-accordion-item accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-ts-1" aria-expanded="false" aria-controls="accordion-ts-1">
                            <h2 class="accordion-header">
                                <button class="team-single-accordion-btn accordion-button collapsed text-size-18 text-weight-600" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-ts-1" aria-expanded="false" aria-controls="accordion-ts-1">
                                    Website & Mobile App Design?
                                </button>
                            </h2>
                            <div id="accordion-ts-1" class="accordion-collapse collapse" data-bs-parent="#accordion-ts-1">
                                <div class="accordion-body text-size-22 text-font-400 text-justify">Lorem ipsum dolor sit amet, adipiscing fromAliquam eu sem turpmaximus.</div>
                            </div>
                        </div>
                        <div class="team-single-accordion-item accordion-item collapsed mt-3" data-bs-toggle="collapse" data-bs-target="#accordion-ts-2" aria-expanded="false" aria-controls="accordion-ts-2">
                            <h2 class="accordion-header">
                                <button class="team-single-accordion-btn accordion-button collapsed text-size-18 text-weight-600" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-ts-2" aria-expanded="false" aria-controls="accordion-ts-2">
                                    Website & Mobile App Design?
                                </button>
                            </h2>
                            <div id="accordion-ts-2" class="accordion-collapse collapse" data-bs-parent="#accordion-ts-2">
                                <div class="accordion-body text-size-22 text-font-400 text-justify">Lorem ipsum dolor sit amet, adipiscing fromAliquam eu sem turpmaximus.</div>
                            </div>
                        </div>
                        <div class="team-single-accordion-item accordion-item collapsed mt-3" data-bs-toggle="collapse" data-bs-target="#accordion-ts-3" aria-expanded="false" aria-controls="accordion-ts-3">
                            <h2 class="accordion-header">
                                <button class="team-single-accordion-btn accordion-button collapsed text-size-18 text-weight-600" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-ts-3" aria-expanded="false" aria-controls="accordion-ts-3">
                                    Website & Mobile App Design?
                                </button>
                            </h2>
                            <div id="accordion-ts-3" class="accordion-collapse collapse" data-bs-parent="#accordion-ts-3">
                                <div class="accordion-body text-size-22 text-font-400 text-justify">Lorem ipsum dolor sit amet, adipiscing fromAliquam eu sem turpmaximus.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color-primary-3">
        <div class="container text-center padding_vertical_180 margin_top_150">
            <p class="text-font-dm text-size-50 d-md-block d-none mb-5">Our Team Members</p>
            <p class="text-font-dm text-size-35 d-md-none">Our Team Members</p>
            <div class="row">
                <div class="col-md-3 mt-3">
                    <img src="{{ asset('assets/img/page_about/person_1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 mt-3">
                    <img src="{{ asset('assets/img/page_about/person_2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 mt-3">
                    <img src="{{ asset('assets/img/page_about/person_3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 mt-3">
                    <img src="{{ asset('assets/img/page_about/person_4.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container padding_vertical_180">
            <p class="text-font-dm text-size-50 color-primary-2 text-center d-none d-md-block">Contact Me</p>
            <p class="text-font-dm text-size-35 color-primary-2 text-center d-md-none">Contact Me</p>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 mt-5">
                    <form action="#" method="POST" class="text-center">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control border border-0 border-bottom" placeholder="Name" aria-label="First Name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control border border-0 border-bottom" placeholder="Email" aria-label="Email">
                            </div>
                        </div>
                        <div class="form-floating mt-4">
                            <textarea class="form-control border border-0 border-bottom" placeholder="Hello Iam Intrested in.." id="floatingTextarea2" style="height: 150px"></textarea>
                            <label for="floatingTextarea2">Sent Your Message</label>
                        </div>
                        <div class="form-check d-flex justify-content-center align-items-md-start align-items-center mt-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label color-primary-1 ms-md-2" for="flexCheckDefault">Save my name, email, and website in this browser for the next time I comment.</label>
                        </div>
                        <x-button.primary type="submit" class="margin_top_77">
                            Send Now
                        </x-button.primary>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
@endsection