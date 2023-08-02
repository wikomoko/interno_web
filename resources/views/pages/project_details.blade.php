@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_project_details"></div>
    </section>

    <div class="container">
        <section>
            <div class="row margin_vertical_100 d-flex align-items-center">
                <div class="col-md-5">
                    <div class="project-details-content bg-color-primary-3 color-primary-4 border-radius-70">
                        <div>
                            <div class="row text-size-22 text-weight-400">
                                <div class="col-5">
                                    <p class="text-font-dm">Client</p>
                                </div>
                                <div class="col-7">
                                    <p>Your client name</p>
                                </div>
                            </div>
                            <div class="row text-size-22 text-weight-400">
                                <div class="col-5">
                                    <p class="text-font-dm">Category</p>
                                </div>
                                <div class="col-7">
                                    <p>Interiors</p>
                                </div>
                            </div>
                            <div class="row text-size-22 text-weight-400">
                                <div class="col-5">
                                    <p class="text-font-dm">Tags</p>
                                </div>
                                <div class="col-7">
                                    <p>interior, Home</p>
                                </div>
                            </div>
                            <div class="row text-size-22 text-weight-400">
                                <div class="col-5">
                                    <p class="text-font-dm">Date</p>
                                </div>
                                <div class="col-7">
                                    <p>Date 23,02, 2022</p>
                                </div>
                            </div>
                            <div class="row text-size-22 text-weight-400">
                                <div class="col-5">
                                    <p class="text-font-dm">Link</p>
                                </div>
                                <div class="col-7">
                                    <p>Link example.com</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-7 ps-md-5 mt-md-0 mt-5">
                    <h1 class="text-size-50 text-font-dm text-weight-400 d-md-block d-none">Minimal Look Bedrooms</h1>
                    <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">Minimal Look Bedrooms</h1>
                    <p class="text-size-22 text-font-400 text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquamsem vitae turpis dignissim maximus. Aliquam sollicitudin tellumassa, vbel maximus purus posuere in. Dojrices gravida dignissim. Praesent at nibh in mi fringilla mattis. Phasellus ut dolor odio. Aenean in the ipsum vel lectus bibendum commodo. 
                    <p class="text-size-22 text-font-400 text-justify">In nec sem suscipit, convallis leo vitae, lacinia nibh. Cras amet tellus lectus. Vivamus ipsum nunc, mattis quis nibh id, pellentesque arcu. Donec a pellentesque Cras erat enim, gravida non ante vitae,elequis convallis elit, in viverra felis. Donec ultrices tellus vitae iaculisvd porta. Proin tincidunt ligula id purus porttitor.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="img-content border-radius-70 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/icons/zoom.svg') }}">
            </div>
        </section>
    </div>
@endsection