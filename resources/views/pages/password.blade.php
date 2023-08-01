@extends('layout.main')

@section('content')
<section>
    <div class="container-fluid banner_password">
        <div class="pad_banner text-center bg-white">
            <span class="text-font-dm color-primary-2 text-size-40 d-none d-md-block">Restricted Page</span>
            <span class="text-font-dm color-primary-2 text-size-35 d-md-none">Restricted Page</span>
            <br>
            <span class="text-font-jost color-primary-4 text-size-22">Home / Restricted</span>
        </div>
    </div>
</section>
<section>
    <div class="container margin_vertical_200">
        <div class="card_primary_pad p-5 bg-color-primary-3 border-radius-70 text-center">
            <p class="text-font-dm text-size-50 color-primary-2 d-none d-md-block">Password Protected</p>
            <p class="text-font-dm text-size-35 color-primary-2 d-md-none">Password Protected</p>
            <p class="text-font-jost text-size-22 color-primary-4">
                This page is password protected. If you are the website admin, <br/> or have access to this page, please type your password below.
            </p>
            <br>
            <form action="#" method="post">
                @csrf
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="password" class="form-control bg-color-primary-3 border border-0 border-bottom" placeholder="Enter Your Password" aria-label="Enter Your Password">
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
                <br>
                <x-button.primary type="submit">
                    Submit Now
                </x-button.primary>
            </form>
        </div>
    </div>
</section>
@endsection