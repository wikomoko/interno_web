@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_pricing">
            <div class="pad_banner text-center bg-white">
                <span class="text-font-dm color-primary-2 text-size-50">Pricing & Plan</span>
                <br>
                <span class="text-font-jost color-primary-4 text-size-22">Home / Priceing</span>
            </div>
        </div>
    </section>

    <div class="container">
        <section>
            <div class="price row">
                <div class="col-md-4 pe-md-4">
                    <div class="price-content text-center bg-color-primary-3">
                        <p class="text-size-25 text-font-dm text-weight-400">Design advices</p>
                        <h1 class="text-size-85 text-font-dm text-weight-400 mb-0"><span class="text-size-25 text-font-dm text-weight-400">$</span>29</h1>
                        <p class="text-size-25 text-font-dm text-weight-400">/month</p>
                        <hr class="color-primary-1 border-3 mt-5 mb-5">
                        <div class="text-size-20 text-weight-400 color-primary-4 mb-5">
                            <p>General living space advices</p>
                            <p class="mt-4">Rennovation advices</p>
                            <p class="mt-4">Interior design advices</p>
                            <p class="mt-4">Furniture reorganization</p>
                            <p class="mt-4">Up to 5 hours meetings</p>
                        </div>
                        <x-button.secondary href="#">Get Started</x-button.secondary>
                    </div>
                </div>
                <div class="col-md-4 ps-md-3 pe-md-3">
                    <div class="price-content text-center bg-color-primary-3 mt-md-0 mt-4">
                        <p class="text-size-25 text-font-dm text-weight-400">Complete interior</p>
                        <h1 class="text-size-85 text-font-dm text-weight-400 color-primary-1 mb-0"><span class="text-size-25 text-font-dm text-weight-400">$</span>39</h1>
                        <p class="text-size-25 text-font-dm text-weight-400">/month</p>
                        <div class="most-popular mt-5 mb-5">
                            <span class="text-size-18 text-weight-600 bg-color-primary-2 text-white">Most Popular Plans</span>
                        </div>
                        <div class="text-size-20 text-weight-400 color-primary-4 mb-5">
                            <p>Complete home redesign</p>
                            <p class="mt-4">Interior and exterior works</p>
                            <p class="mt-4">Modular interior planning</p>
                            <p class="mt-4">Kitchen design</p>
                            <p class="mt-4">Garages organization</p>
                        </div>
                        <x-button.primary href="#">Get Started</x-button.primary>
                    </div>
                </div>
                <div class="col-md-4 ps-md-4">
                    <div class="price-content text-center bg-color-primary-3 mt-md-0 mt-4">
                        <p class="text-size-25 text-font-dm text-weight-400">Furniture Design</p>
                        <h1 class="text-size-85 text-font-dm text-weight-400 mb-0"><span class="text-size-25 text-font-dm text-weight-400">$</span>59</h1>
                        <p class="text-size-25 text-font-dm text-weight-400">/month</p>
                        <hr class="color-primary-1 border-3 mt-5 mb-5">
                        <div class="text-size-20 text-weight-400 color-primary-4 mb-5">
                            <p>Furniture for living room</p>
                            <p class="mt-4">Furniture refurbishment</p>
                            <p class="mt-4">Sofas and amchairs</p>
                            <p class="mt-4">Tables and chairs</p>
                            <p class="mt-4">Kitchens</p>
                        </div>
                        <x-button.secondary href="#">Get Started</x-button.secondary>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection