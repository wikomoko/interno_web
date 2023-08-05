@extends('layout.main')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row text-center text-lg-start   ">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="container w-75 px-md-5 ">
                    <p class="text-font-dm color-primary-1 text-size-250 d-none d-lg-block">404</p>
                    <p class="text-font-dm color-primary-1 text-size-100 d-lg-none">404</p>
                    <p class="text-font-dm color-primary-2 text-size-35 d-none d-md-block">We are sorry, but the page you requested was not found</p>
                    <p class="text-font-dm color-primary-2 text-size-25 d-md-none">We are sorry, but the page you requested was not found</p>
                    <x-button.primary onclick="location.href = '/'">
                        Back To Home
                    </x-button.primary>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="img_404 d-none d-lg-block"></div>
            </div>
        </div>
    </div>
</section>
@endsection