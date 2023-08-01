@extends('layout.main')

@section('content')
<section>
    <div class="container-fluid banner_contact">
        <div class="pad_banner text-center bg-white">
            <span class="text-font-dm color-primary-2 text-size-50">Contact Us</span>
            <br>
            <span class="text-font-jost color-primary-4 text-size-22">Home / Contact</span>
        </div>
    </div>
</section>
<section>
    <div class="container margin_vertical_200">
        <p class="text-font-dm text-size-50 color-primary-2 text-center d-none d-md-block">We love meeting new people <br/> and helping them.</p>
        <p class="text-font-dm text-size-35 color-primary-2 text-center d-md-none">We love meeting new people and helping them.</p>
        <br>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="bg-color-primary-3 border-radius-50 p-5">
                    <div class="d-flex align-items-center mt-5">
                        <img src="{{ asset('assets/img/icons/mail_icon.svg') }}" class="pe-3" alt="">
                        <span class="text-font-jost text-size-20 color-primary-4">info@yourdomain.com</span>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <img src="{{ asset('assets/img/icons/phone_icon.svg') }}" class="pe-3" alt="">
                        <span class="text-font-jost text-size-20 color-primary-4">+1 (378) 400-1234</span>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <img src="{{ asset('assets/img/icons/web_icon.svg') }}" class="pe-3" alt="">
                        <span class="text-font-jost text-size-20 color-primary-4">www.yourdomain.com</span>
                    </div>
                    <div class="d-flex align-items-center mt-5 justify-content-evenly">
                        <img src="{{ asset('assets/img/icons/facebook.svg') }}"  alt="">
                        <img src="{{ asset('assets/img/icons/linkedin.svg') }}"  alt="">
                        <img src="{{ asset('assets/img/icons/twitter.svg') }}"  alt="">
                        <img src="{{ asset('assets/img/icons/instagram.svg') }}"  alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form action="#" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-5 mt-md-0">
                            <input type="text" class="form-control border border-0 border-bottom" placeholder="Name" aria-label="First Name">
                        </div>
                        <div class="col-md-6 mt-5 mt-md-0">
                            <input type="email" class="form-control border border-0 border-bottom" placeholder="Email" aria-label="Email">
                        </div>
                    </div>
                    <div class="row mt-md-5">
                        <div class="col-md-6 mt-5 mt-md-0">
                            <input type="text" class="form-control border border-0 border-bottom " placeholder="Subject" aria-label="Subject">
                        </div>
                        <div class="col-md-6 mt-5 mt-md-0">
                            <input type="number" class="form-control border border-0 border-bottom" placeholder="Phone" aria-label="Phone">
                        </div>
                    </div>
                    <div class="form-floating mt-4">
                        <textarea class="form-control border border-0 border-bottom" placeholder="Hello Iam Intrested in.." id="floatingTextarea2" style="height: 150px"></textarea>
                        <label for="floatingTextarea2">Hello Iam Intrested in..</label>
                    </div>
                   <div class="text-center text-md-end">
                    <x-button.primary type="submit" class="margin_top_77">
                        Send Now
                    </x-button.primary>
                   </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <img src="{{ asset('assets/img/page_contact/maps.png') }}" class="img-fluid img_round_rectange_pad w-100" alt="">
    </div>
</section>
@endsection