@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_team">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-40">Our Professional</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Team</span>
            </div>
        </div>
    </section>
    <section>
        <div class="container margin_vertical_200">
            <div class="row">
                {{-- card --}}
                <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/levi.jpg') }}" alt=""
                            class="img-fluid border-radius-30">
                        <span class="text-font-dm color-primary-2 text-size-25">Charlotte Levi</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/julie.jpg') }}" alt=""
                            class="img-fluid border-radius-30">
                        <span class="text-font-dm color-primary-2 text-size-25">Nattasha Julie</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/linkedin.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/john.jpg') }}" alt=""
                            class="img-fluid border-radius-30 w-100">
                        <span class="text-font-dm color-primary-2 text-size-25">John Smith</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/nora.jpg') }}" alt=""
                            class="img-fluid border-radius-30">
                        <span class="text-font-dm color-primary-2 text-size-25">Nora Owen</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/sofia.jpg') }}" alt=""
                            class="img-fluid border-radius-30 w-100">
                        <span class="text-font-dm color-primary-2 text-size-25">Sofia Carter</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/jackson.jpg') }}" alt=""
                            class="img-fluid border-radius-30">
                        <span class="text-font-dm color-primary-2 text-size-25">Avery Jackson</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/linkedin.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/james.jpg') }}" alt=""
                            class="img-fluid border-radius-30">
                        <span class="text-font-dm color-primary-2 text-size-25">Luna James</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
                 {{-- card --}}
                 <div class="col-md-3 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/page_team/mateo.jpg') }}" alt=""
                            class="img-fluid border-radius-30">
                        <span class="text-font-dm color-primary-2 text-size-25">Gianna Mateo</span>
                        <br>
                        <span class="text-font-jost color-primary-4 text-siz-16">Design, Australia</span>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" class="pe-5">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- end card --}}
            </div>
        </div>
    </section>
@endsection
