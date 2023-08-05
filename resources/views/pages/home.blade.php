@extends('layout.main')

@section('content')

<div class="jumbotron-home">
    <div class="container jumbotron-home-content">
        <h1 class="text-size-85 text-size-85 text-font-dm text-weight-400 d-md-block d-none">Let Your Home <br> Be Unique</h1>
        <h1 class="text-size-50 text-size-85 text-font-dm text-weight-400 d-md-none">Let Your Home <br> Be Unique</h1>
        <p class="text-size-22 text-weight-400 d-md-block d-none">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <p class="text-size-22 text-weight-400 d-md-none">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <x-button.primary href="#">Get Started</x-button.primary>
    </div>
</div>

<div class="container">

    {{-- work content --}}
    <div class="row work-content">
        <div class="col-md-4 text-center mb-5 mb-md-0">
            <a href="{{ route('services_single') }}">
                <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Project Plan</h3>
                <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                <span class="text-size-18 text-weight-600">
                    Read More
                    <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                </span>
            </a>
        </div>
        <div class="col-md-4 text-center mb-5 mb-md-0">
            <a href="{{ route('services_single') }}">
                <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Interior Work</h3>
                <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                <span class="text-size-18 text-weight-600">
                    Read More
                    <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                </span>
            </a>
        </div>
        <div class="col-md-4 text-center mb-5 mb-md-0">
            <a href="{{ route('services_single') }}">
                <h3 class="text-size-25 text-font-dm text-weight-400 mb-3">Realization</h3>
                <p class="text-size-22 text-weight-400 mb-md-5 mb-3">There are many variations of the <br> passages of lorem Ipsum from <br> available, majority.</p>
                <span class="text-size-18 text-weight-600">
                    Read More
                    <img src="{{ asset('assets/img/icons/arrow_cream.svg') }}" class="mb-1 ms-1">
                </span>
            </a>
        </div>
    </div>
    {{-- end of work content --}}

    {{-- about --}}
    <div class="row about-content">
        <div class="col-md-6">
            <h1 class="text-size-50 text-font-dm text-weight-400 d-md-block d-none mb-4">We Create The Art <br> Of Stylish Living <br> Stylishly</h1>
            <h1 class="text-size-35 text-font-dm text-weight-400 d-md-none text-center mb-4">We Create The Art Of Stylish Living Stylishly</h1>
            <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact that a reader will be <br> distracted by the of readable content of a page <br> when lookings at its layouts the points of using <br> that it has a more-or-less normal.</p>
            <p class="text-size-18 text-weight-400 d-md-none text-center">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using that it has a more-or-less normal.</p>
            <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-md-5 mt-4">
                <img src="{{ asset('assets/img/icons/call-circle.svg') }}">
                <p class="text-size-22 text-weight-400 ms-3"><span class="text-size-24 text-weight-700">012345678 <br></span>Call Us Anytime</p>
            </div>
            <div class="text-md-start text-center mt-md-5 mt-4">
                <x-button.primary href="{{ route('pricing') }}">Get Free Estimate</x-button.primary>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/img/page_home/img-about.svg') }}" class="img-about d-md-block d-none">
        </div>
    </div>
    {{-- end of about --}}

    {{-- testimonial --}}
    <div class="testimonial">
        <h1 class="text-size-50 text-font-dm text-weight-400 text-center d-md-block d-none">What the People Thinks <br> About Us</h1>
        <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">What the People Thinks About Us</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/page_home/testimonial-img-1.svg') }}">
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
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/page_home/testimonial-img-1.svg') }}">
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
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/page_home/testimonial-img-1.svg') }}">
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
    <div class="client row d-md-flex justify-content-md-between d-block">
        <div class="col d-flex justify-content-center align-items-center mb-md-0">
            <img src="{{ asset('assets/img/page_home/client-1.svg') }}"> 
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-md-0">
            <img src="{{ asset('assets/img/page_home/client-2.svg') }}"> 
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-md-0">
            <img src="{{ asset('assets/img/page_home/client-3.svg') }}"> 
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-md-0">
            <img src="{{ asset('assets/img/page_home/client-4.svg') }}"> 
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-md-0">
            <img src="{{ asset('assets/img/page_home/client-5.svg') }}"> 
        </div>
    </div>
    {{-- end of client logo --}}

    {{-- project --}}
    <div class="home-project">
        <h1 class="text-size-50 text-font-dm text-weight-400 text-center d-md-block d-none">Follow Our Projects</h1>
        <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">Follow Our Projects</h1>
        <p class="text-size-22 text-weight-400 text-center d-md-block d-none">It is a long established fact that a reader will be distracted by the of readable <br> content of page  lookings at its layouts  points.</p>
        <p class="text-size-18 text-weight-400 text-center d-md-none">It is a long established fact that a reader will be distracted by the of readable content of page  lookings at its layouts  points.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 mt-md-0 mt-5 ms-md-5 me-md-5">
                    <img src="{{ asset('assets/img/page_home/project-img-1.svg') }}" class="card-img-top home-project-card-img-1">
                    <a href="{{ route('project_details') }}" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 mt-md-0 mt-5 ms-md-5 me-md-5">
                    <img src="{{ asset('assets/img/page_home/project-img-1.svg') }}" class="card-img-top home-project-card-img-2">
                    <a href="{{ route('project_details') }}" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}">
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-md-5">
            <div class="col-md-6">
                <div class="card border-0 mt-md-0 mt-5 ms-md-5 me-md-5">
                    <img src="{{ asset('assets/img/page_home/project-img-1.svg') }}" class="card-img-top home-project-card-img-3">
                    <a href="{{ route('project_details') }}" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 mt-md-0 mt-5 ms-md-5 me-md-5">
                    <img src="{{ asset('assets/img/page_home/project-img-1.svg') }}" class="card-img-top home-project-card-img-4">
                    <a href="{{ route('project_details') }}" class="home-project-card-body d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h3 class="text-size-25 text-font-dm text-weight-400 mb-0">Modern Kitchan</h3>
                            <span class="text-size-25 text-weight-400">Decor / Artchitecture</span>
                        </div>
                        <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}">
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
            <div class="amount-content col-md-3 text-center mt-md-0 mt-4">
                <h1 class="text-size-85 text-font-dm text-weight-400 color-primary-1">12</h1>
                <p class="text-size-22 text-weight-400">Years Of Experiance</p>
            </div>
            <div class="amount-content col-md-3 text-center mt-md-0 mt-4">
                <h1 class="text-size-85 text-font-dm text-weight-400 color-primary-1">85</h1>
                <p class="text-size-22 text-weight-400">Success Project</p>
            </div>
            <div class="amount-content col-md-3 text-center mt-md-0 mt-4">
                <h1 class="text-size-85 text-font-dm text-weight-400 color-primary-1">15</h1>
                <p class="text-size-22 text-weight-400">Active Project</p>
            </div>
            <div class="amount-content col-md-3 text-center mt-md-0 mt-4" style="border: none;">
                <h1 class="text-size-85 text-font-dm text-weight-400 color-primary-1">95</h1>
                <p class="text-size-22 text-weight-400">Happy CUstomers</p>
            </div>
        </div>
    </div>
</div>
{{-- end of amount --}}

<div class="container">

    {{-- blog --}}
    <div class="home-blog">
        <h1 class="text-size-50 text-font-dm text-weight-400 text-center d-md-block d-none">Articles & News</h1>
        <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">Articles & News</h1>
        <p class="text-size-22 text-weight-400 text-center d-md-block d-none">It is a long established fact that a reader will be distracted by the of readable content <br> of a page when lookings at its layouts the points of using.</p>
        <p class="text-size-18 text-weight-400 text-center d-md-none">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>

        <div class="row mt-md-5">
            <div class="col-md-4">
                <a href="{{ route('blog_details') }}" class="card home-blog-card mt-md-0 mt-2">
                    <img src="{{ asset('assets/img/page_home/home-blog-img-1.svg') }}" class="card-img-top">
                    <div class="home-blog-card-img-content text-center mb-2">
                        <span class="text-size-16 text-weight-400">Kitchan Design</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Let’s Get Solution For Building Construction Work</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <span class="text-size-16 text-weight-400">26 December,2022 </span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" width="52px">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('blog_details') }}" class="card home-blog-card mt-md-0 mt-4">
                    <img src="{{ asset('assets/img/page_home/home-blog-img-1.svg') }}" class="card-img-top">
                    <div class="home-blog-card-img-content text-center mb-2">
                        <span class="text-size-16 text-weight-400">Kitchan Design</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Let’s Get Solution For Building Construction Work</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <span class="text-size-16 text-weight-400">26 December,2022 </span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" width="52px">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('blog_details') }}" class="card home-blog-card mt-md-0 mt-4">
                    <img src="{{ asset('assets/img/page_home/home-blog-img-1.svg') }}" class="card-img-top">
                    <div class="home-blog-card-img-content text-center mb-2">
                        <span class="text-size-16 text-weight-400">Kitchan Design</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Let’s Get Solution For Building Construction Work</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <span class="text-size-16 text-weight-400">26 December,2022 </span>
                            <img src="{{ asset('assets/img/icons/vector-right-circle.svg') }}" width="52px">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- end of blog --}}

    {{-- home-contact --}}
    <div class="home-contact text-center">
        <h1 class="text-size-50 text-font-dm text-weight-400 d-md-block d-none">Wanna join the interno?</h1>
        <h1 class="text-size-35 text-font-dm text-weight-400 d-md-none">Wanna join the interno?</h1>
        <p class="text-size-22 text-weight-400 d-md-block d-none">It is a long established fact  will be distracted.</p>
        <p class="text-size-18 text-weight-400 d-md-none">It is a long established fact  will be distracted.</p>
        <x-button.secondary class="mt-3" href="{{ route('contact') }}">Contact With Us</x-button.secondary>
    </div>
    {{-- end of home-contact --}}

</div>

@endsection