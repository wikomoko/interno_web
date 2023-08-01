@extends('layout.main')

@section('content')
<section>
    <div class="container-fluid banner_services_single">
        <div class="pad_banner text-center bg-white">
            <span class="text-font-dm color-primary-2 text-size-50">Changelog</span>
            <br>
            <span class="text-font-jost color-primary-4 text-size-22">Home / Changelog</span>
        </div>
    </div>
</section>
<section>
    <div class="container margin_vertical_200 d-none d-md-block">
        <div class="card_primary_pad bg-color-primary-3 border-radius-70 d-md-flex justify-content-center align-items-center">
            <p class="text-font-dm text-size-50 color-primary-2 px-md-5">V.1</p>
            <p class="text-font-jost text-size-22 color-primary-4">Initial Interno Webflow Template Release</p>
        </div>
    </div>
    <div class="container margin_vertical_100 d-md-none">
        <div class="bg-color-primary-3 border-radius-45 d-flex flex-column justify-content-center align-items-center">
            <p class="text-font-dm text-size-50 color-primary-2 px-md-5">V.1</p>
            <p class="text-font-jost text-size-18 color-primary-4 text-center">Initial Interno Webflow Template Release</p>
        </div>
    </div>
</section>
@endsection