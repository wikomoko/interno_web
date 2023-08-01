@extends('layout.main')

@section('content')

<div class="jumbotron-home">
    <div class="container jumbotron-home-content">
        <h1 class="text-size-85 text-font-dm text-weight-400">Let Your Home <br> Be Unique</h1>
        <p class="text-size-22 text-weight-400">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <x-button.primary href="#">Get Started</x-button.primary>
    </div>
</div>

<div class="container">

    {{-- work content --}}
    <div class="row work-content">
        <div class="col-md-4 text-center">
            <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Project Plan</h3>
            <p class="work-content-text text-size-22 text-weight-400">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
            <a href="#" class="work-content-btn text-size-18 text-weight-600">
                Read More
                <img src="assets/img/vector-right.svg" class="mb-1 ms-1" alt="">
            </a>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Interior Work</h3>
            <p class="work-content-text text-size-22 text-weight-400">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
            <a href="#" class="work-content-btn text-size-18 text-weight-600">
                Read More
                <img src="assets/img/vector-right.svg" class="mb-1 ms-1" alt="">
            </a>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Realization</h3>
            <p class="work-content-text text-size-22 text-weight-400">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
            <a href="#" class="work-content-btn text-size-18 text-weight-600">
                Read More
                <img src="assets/img/vector-right.svg" class="mb-1 ms-1" alt="">
            </a>
        </div>
    </div>
    {{-- end of work content --}}

    {{-- about --}}
    <div class="row about-content">
        <div class="about-sub-content col-md-6">
            <h1 class="text-font-dm text-weight-400 mb-4">We Create The Art <br> Of Stylish Living <br> Stylishly</h1>
            <p class="text-weight-400">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using that it has a more-or-less normal.</p>
            <div class="d-flex align-items-center mt-5">
                <img src="assets/img/call-icon.svg">
                <p class="text-size-22 text-weight-400 ms-3"><span class="text-size-24 text-weight-700">012345678 <br></span>Call Us Anytime</p>
            </div>
            <x-button.primary class="mt-5" href="#">Get Free Estimate</x-button.primary>
        </div>
        <div class="col-md-6">
            <img src="assets/img/img-about.svg" class="img-about">
        </div>
    </div>
    {{-- end of about --}}

    {{-- testimonial --}}
    <div class="testimonial">
        <h1 class="text-font-dm text-weight-400 text-center">What the People Thinks <br> About Us</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-card-header d-flex align-items-center">
                        <img src="assets/img/testimonial-img-1.svg">
                        <div class="ms-3">
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Nattasha Mith</h3>
                            <span class="text-size-18 text-weight-400">Sudney, USA</span>
                        </div>
                    </div>
                    <div class="testimonial-card-body mt-4">
                        <p class="text-size-22 text-weight-400">Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-card-header d-flex align-items-center">
                        <img src="assets/img/testimonial-img-1.svg">
                        <div class="ms-3">
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Raymond Galario</h3>
                            <span class="text-size-18 text-weight-400">Sudney, Australia</span>
                        </div>
                    </div>
                    <div class="testimonial-card-body mt-4">
                        <p class="text-size-22 text-weight-400">Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been scrambled it to make a type book.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-card-header d-flex align-items-center">
                        <img src="assets/img/testimonial-img-1.svg">
                        <div class="ms-3">
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Benny Roll</h3>
                            <span class="text-size-18 text-weight-400">Sudney, New York</span>
                        </div>
                    </div>
                    <div class="testimonial-card-body mt-4">
                        <p class="text-size-22 text-weight-400">Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been scrambled.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of testimonial --}}

    {{-- client logo --}}
    <div class="client row">
        <div class="col client-img">
            <img src="assets/img/client-1.svg"> 
        </div>
        <div class="col client-img">
            <img src="assets/img/client-2.svg"> 
        </div>
        <div class="col client-img">
            <img src="assets/img/client-3.svg"> 
        </div>
        <div class="col client-img">
            <img src="assets/img/client-4.svg"> 
        </div>
        <div class="col client-img">
            <img src="assets/img/client-5.svg"> 
        </div>
    </div>
    {{-- end of client logo --}}

    {{-- project --}}
    <div class="home-project">
        <h1 class="text-font-dm text-weight-400 text-center">Follow Our Projects</h1>
        <p class="text-size-22 text-weight-400 text-center">It is a long established fact that a reader will be distracted by the of readable content of page  lookings at its layouts  points.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card home-project-card">
                    <img src="assets/img/project-img-1.svg" class="card-img-top home-project-card-img-1">
                    <a href="#" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="assets/img/vector-right-circle.svg">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card home-project-card">
                    <img src="assets/img/project-img-1.svg" class="card-img-top home-project-card-img-2">
                    <a href="#" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="assets/img/vector-right-circle.svg">
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card home-project-card">
                    <img src="assets/img/project-img-1.svg" class="card-img-top home-project-card-img-3">
                    <a href="#" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="assets/img/vector-right-circle.svg">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card home-project-card">
                    <img src="assets/img/project-img-1.svg" class="card-img-top home-project-card-img-4">
                    <a href="#" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="assets/img/vector-right-circle.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- end of project --}}

</div>

{{-- amount --}}
<div class="amount">
    <div class="container">
        <div class="row">
            <div class="amount-content col-md-3 text-center">
                <h1 class="text-size-85 text-font-dm text-weight-400">12</h1>
                <p class="text-size-22 text-weight-400">Years Of Experiance</p>
            </div>
            <div class="amount-content col-md-3 text-center">
                <h1 class="text-size-85 text-font-dm text-weight-400">85</h1>
                <p class="text-size-22 text-weight-400">Success Project</p>
            </div>
            <div class="amount-content col-md-3 text-center">
                <h1 class="text-size-85 text-font-dm text-weight-400">15</h1>
                <p class="text-size-22 text-weight-400">Active Project</p>
            </div>
            <div class="amount-content col-md-3 text-center" style="border: none;">
                <h1 class="text-size-85 text-font-dm text-weight-400">95</h1>
                <p class="text-size-22 text-weight-400">Happy CUstomers</p>
            </div>
        </div>
    </div>
</div>
{{-- end of amount --}}

<div class="container">

    {{-- blog --}}
    <div class="home-blog">
        <h1 class="text-font-dm text-weight-400 text-center">Articles & News</h1>
        <p class="text-size-22 text-weight-400 text-center">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>

        <div class="row mt-5">
            <div class="col-md-4">
                <a href="" class="card home-blog-card">
                    <img src="assets/img/home-blog-img-1.svg" class="card-img-top">
                    <div class="home-blog-card-img-content text-center">
                        <span class="text-size-16 text-weight-400">Kitchan Design</span>
                    </div>
                    <div class="home-blog-card-body">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Let’s Get Solution For Building Construction Work</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <span class="text-size-16 text-weight-400">26 December,2022 </span>
                            <img src="assets/img/vector-right-circle.svg" width="52px">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card home-blog-card">
                    <img src="assets/img/home-blog-img-1.svg" class="card-img-top">
                    <div class="home-blog-card-img-content text-center">
                        <span class="text-size-16 text-weight-400">Kitchan Design</span>
                    </div>
                    <div class="home-blog-card-body">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Let’s Get Solution For Building Construction Work</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <span class="text-size-16 text-weight-400">26 December,2022 </span>
                            <img src="assets/img/vector-right-circle.svg" width="52px">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="card home-blog-card">
                    <img src="assets/img/home-blog-img-1.svg" class="card-img-top">
                    <div class="home-blog-card-img-content text-center">
                        <span class="text-size-16 text-weight-400">Kitchan Design</span>
                    </div>
                    <div class="home-blog-card-body">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Let’s Get Solution For Building Construction Work</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <span class="text-size-16 text-weight-400">26 December,2022 </span>
                            <img src="assets/img/vector-right-circle.svg" width="52px">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- end of blog --}}

    {{-- home-contact --}}
    <div class="home-contact">
        <h1 class="text-size-50 text-font-dm text-weight-400">Wanna join the interno?</h1>
        <p class="text-size-22 text-weight-400">It is a long established fact  will be distracted.</p>
        <x-button.secondary class="mt-3" href="#">Contact With Us</x-button.secondary>
    </div>
    {{-- end of home-contact --}}

</div>

@endsection