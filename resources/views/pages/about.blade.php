@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_about">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">About Us</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / About Us</span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="quote_pad text-center d-md-block d-none">
                        <span class="text-font-dm color-primary-2 text-size-85">“</span>
                        <p class="text-font-dm color-primary-2 text-size-35 text-italic">
                            I like an interior that defies labeling. I don't really want someone to walk into a room and
                            know that I did it
                        </p>
                        <p class="text-font-jost color-primary-4 text-size-25">
                            -BUNNY WILLIAMS
                        </p>
                    </div>
                    <div class="quote_pad text-center d-md-none">
                        <span class="text-font-dm color-primary-2 text-size-20">“</span>
                        <p class="text-font-dm color-primary-2 text-size-20 text-italic">
                            I like an interior that defies labeling. I don't really want someone to walk into a room and
                            know that I did it
                        </p>
                        <p class="text-font-jost color-primary-4 text-size-16">
                            -BUNNY WILLIAMS
                        </p>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-6 d-md-none">
                    <div class="container">
                        <img src="{{ asset('assets/img/page_about/wedo.jpg') }}" class="img-fluid img_round_rectange_pad"
                            alt="">
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-between flex-column">
                    <p class="text-font-dm color-primary-2 text-size-50">What We Do</p>
                    <p class="text-font-jost color-primary-4 text-size-22">
                        It is a long established fact that a reader will be distracted by the of readable content of a
                        page
                        when lookings at its layouts the points of using
                        that it has a more-or-less normal.
                    </p>
                    <div class="container">
                        <x-button.primary href="{{ route('faq') }}">
                            Our Concept
                        </x-button.primary>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="container">
                        <img src="{{ asset('assets/img/page_about/wedo.jpg') }}" class="img-fluid img_round_rectange_pad"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container margin_top_150">
            <div class="row text-center text-md-start">
                <div class="col-md-6">
                    <div class="container">
                        <img src="{{ asset('assets/img/page_about/result.jpg') }}" class="img-fluid img_round_rectange_pad"
                            alt="">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 d-flex justify-content-between flex-column">
                    <p class="text-font-dm color-primary-2 text-size-50">The End Result</p>
                    <p class="text-font-jost color-primary-4 text-size-22">
                        It is a long established fact that a reader will be distracted by the of readable content of a page
                        when lookings at its layouts the points of using
                        that it has a more-or-less normal.
                    </p>
                    <div class="container">
                        <x-button.primary href="{{ route('project') }}">
                            Our Portfolio
                        </x-button.primary>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-color-primary-3">
        <div class="container text-center padding_vertical_180 margin_top_150">
            <p class="text-font-dm text-size-50 color-primary-2 d-md-block d-none">What the People Thinks <br />About Us</p>
            <p class="text-font-dm text-size-35 color-primary-2 d-md-none">What the People Thinks About Us</p>
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
            <p class="text-font-dm text-size-50 color-primary-2 text-center d-none d-md-block">Creative project? Let's have
                <br> a productive talk.
            </p>
            <p class="text-font-dm text-size-35 color-primary-2 text-center d-md-none">Creative project? Let's have a productive talk.</p>
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
                            <label for="floatingTextarea2">Hello Iam Intrested in..</label>
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
