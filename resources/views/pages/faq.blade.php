@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_faq">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">Faq's</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Faq</span>
            </div>
        </div>
    </section>

    <section>
        <div class="container margin_vertical_200 mb-0">
            <h1 class="text-size-50 text-font-dm text-weight-400 text-center pb-md-4">Every Question Answered</h1>
            <div class="row d-flex align-items-center mt-5">
                <div class="col-md-6 pe-md-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-1" aria-expanded="false" aria-controls="accordion-faq-1  ps-0 ms-0">
                                    What is the Hipcouch Interior Design Service?
                                </button>
                            </h2>
                            <div id="accordion-faq-1" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-1">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-2" aria-expanded="false" aria-controls="accordion-faq-2  ps-0 ms-0">
                                    So, how exactly does this work?
                                </button>
                            </h2>
                            <div id="accordion-faq-2" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-2">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-3" aria-expanded="false" aria-controls="accordion-faq-3  ps-0 ms-0">
                                    What cities do you currently operate in?
                                </button>
                            </h2>
                            <div id="accordion-faq-3" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-3">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-4" aria-expanded="false" aria-controls="accordion-faq-4  ps-0 ms-0">
                                    Hipcouch Interior Design Service?
                                </button>
                            </h2>
                            <div id="accordion-faq-4" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-4">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-5" aria-expanded="false" aria-controls="accordion-faq-5  ps-0 ms-0">
                                    What kind of interior designers do you have?
                                </button>
                            </h2>
                            <div id="accordion-faq-5" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-5">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/page_faq/img-content-1.svg') }}" class="border-radius-45 d-md-block d-none">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container margin_vertical_100">
            <h1 class="text-size-50 text-font-dm text-weight-400 text-center pb-md-4">Every Question Answered</h1>
            <div class="row d-flex align-items-center mt-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/page_faq/img-content-1.svg') }}" class="border-radius-45 d-md-block mx-auto d-none">
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-6" aria-expanded="false" aria-controls="accordion-faq-6  ps-0 ms-0">
                                    What is the Hipcouch Interior Design Service?
                                </button>
                            </h2>
                            <div id="accordion-faq-6" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-6">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-7" aria-expanded="false" aria-controls="accordion-faq-7  ps-0 ms-0">
                                    So, how exactly does this work?
                                </button>
                            </h2>
                            <div id="accordion-faq-7" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-7">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-8" aria-expanded="false" aria-controls="accordion-faq-8  ps-0 ms-0">
                                    What cities do you currently operate in?
                                </button>
                            </h2>
                            <div id="accordion-faq-8" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-8">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-9" aria-expanded="false" aria-controls="accordion-faq-9  ps-0 ms-0">
                                    Hipcouch Interior Design Service?
                                </button>
                            </h2>
                            <div id="accordion-faq-9" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-9">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="faq-accordion-btn accordion-button collapsed text-size-25 text-font-dm text-weight-400" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-faq-10" aria-expanded="false" aria-controls="accordion-faq-10  ps-0 ms-0">
                                    What kind of interior designers do you have?
                                </button>
                            </h2>
                            <div id="accordion-faq-10" class="accordion-collapse collapse" data-bs-parent="#accordion-faq-10">
                                <div class="accordion-body text-size-22 text-font-400 text-justify ps-0 pe-5 pb-0">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary popular belief.There are many variations of passages of Lorem Ipsum available, but the majority randomised.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection