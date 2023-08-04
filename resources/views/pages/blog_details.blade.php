@extends('layout.main')

@section('content')
    <section>
        <div class="container-fluid banner_blog_details"></div>
    </section>

    <section>
        <div class="container margin_vertical_200">
            <div class="row">
                <div class="col-md-9 pe-md-5">
                    <h1 class="text-size-50 text-font-dm text-weight-400 d-md-block d-none">Let’s Get Solution for Building Construction Work</h1>
                    <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">Let’s Get Solution for Building Construction Work</h1>
                    <img src="{{ asset('assets/img/page_blog_details/image-1.svg') }}" class="border-radius-50 w-100 mt-3">
                    <div class="d-md-flex align-items-center justify-content-between mt-5">
                        <span class="text-size-16 text-weight-400">26 December,2022</span>
                        <span class="text-size-16 text-weight-400 ms-md-0 ms-3">Interior / Design / Home / Decore</span>
                    </div>
                    <p class="text-size-22 text-weight-400 text-justify mt-5">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injecthumour, or randomised words which don't look even slightly believable. Embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                    <div class="blog-details-quote text-center bg-color-primary-3 border-radius-50 mt-5 mb-5">
                        <img src="{{ asset('assets/img/page_blog_details/tanda-kutip.svg') }}">
                        <p class="text-size-25 text-italic text-font-dm text-weight-400 color-primary-1 mt-3">The details are not the details. They make the design.</p>
                    </div>
                    <h1 class="text-size-50 text-font-dm text-weight-400 d-md-block d-none">Design sprints are great</h1>
                    <h1 class="text-size-35 text-font-dm text-weight-400 text-center d-md-none">Design sprints are great</h1>
                    <p class="text-size-22 text-weight-400 text-justify mt-4">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                    <ol class="text-size-22 text-weight-400">
                        <li>Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</li>
                        <li class="mt-3">Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</li>
                        <li class="mt-3">Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</li>
                    </ol>
                    <img src="{{ asset('assets/img/page_blog_details/image-2.svg') }}" class="border-radius-50 w-100 mt-5">
                    <p class="text-size-22 text-weight-400 text-justify mt-5">Lorem ipsum dolor sit amet, adipiscing Aliquam eu sem vitae turpmaximus.posuere in.Contrary to popular belief.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                    <div class="d-md-flex align-items-center justify-content-between mt-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="text-size-20 text-font-dm text-weight-400">Tags</span>
                            <span class="text-size-18 text-weight-400 bg-color-primary-2 text-white border-radius-10 ps-4 pe-4 pt-2 pb-2 ms-3">Kitchen</span>
                            <span class="text-size-18 text-weight-400 bg-color-primary-3 border-radius-10 ps-4 pe-4 pt-2 pb-2 ms-3">Bedroom</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-md-0 mt-5">
                            <img src="{{ asset('assets/img/icons/facebook.svg') }}">
                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" class="ms-5">
                            <img src="{{ asset('assets/img/icons/linkedin.svg') }}" class="ms-5">
                            <img src="{{ asset('assets/img/icons/instagram.svg') }}" class="ms-5">
                        </div>
                    </div>
                    <p class="text-font-dm text-size-25 margin_top_77">Leave a Reply</p>
                    <div class="mt-5">
                        <form action="#" method="POST" class="">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control border border-0 border-bottom" placeholder="Name" aria-label="First Name">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control border border-0 border-bottom" placeholder="Email" aria-label="Email">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <input type="text" class="form-control border border-0 border-bottom" placeholder="Website" aria-label="Website">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control border border-0 border-bottom" placeholder="Phone" aria-label="Phone">
                                </div>
                            </div>
                            <div class="form-floating mt-4">
                                <textarea class="form-control border border-0 border-bottom" placeholder="Hello Iam Intrested in.." id="floatingTextarea2" style="height: 150px"></textarea>
                                <label for="floatingTextarea2">Hello Iam Intrested in..</label>
                            </div>
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label color-primary-1 ms-md-2" for="flexCheckDefault">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                            <x-button.primary type="submit" class="margin_top_77">
                                Send Now
                            </x-button.primary>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 mt-md-0 mt-5">
                    <div class="d-flex align-items-center justify-content-between bg-color-primary-3 border-radius-20 p-4">
                        <span class="text-size-22 text-weight-400 color-primary-1">Search</span>
                        <img src="{{ asset('assets/img/icons/search-cream.svg') }}" alt="">
                    </div>
                    <div class="mt-5">
                        <h4 class="text-size-25 text-font-dm text-weight-400">Latest News</h4>
                        <div class="border-bottom-cream mt-4">
                            <a href="#" class="color-primary-2">
                                <p class="text-size-20 text-font-dm text-weight-400">We Focus On Comfort And Gorgeous</p>
                                <div class="text-end mb-1">
                                    <span class="text-size-16 text-weight-400 color-primary-4">06/02/2020</span>
                                </div>
                            </a>
                        </div>
                        <div class="border-bottom-cream mt-4">
                            <a href="#" class="color-primary-2">
                                <p class="text-size-20 text-font-dm text-weight-400">We Focus On Comfort And Gorgeous</p>
                                <div class="text-end mb-1">
                                    <span class="text-size-16 text-weight-400 color-primary-4">06/02/2020</span>
                                </div>
                            </a>
                        </div>
                        <div class="border-bottom-cream mt-4">
                            <a href="#" class="color-primary-2">
                                <p class="text-size-20 text-font-dm text-weight-400">We Focus On Comfort And Gorgeous</p>
                                <div class="text-end mb-1">
                                    <span class="text-size-16 text-weight-400 color-primary-4">06/02/2020</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="bg-color-primary-3 border-radius-20 mt-5 mb-5 p-4">
                        <h3 class="text-size-25 text-font-dm text-weight-400">Categories</h3>
                        <div class="border-bottom-cream mt-4">
                            <p class="text-size-22 text-weight-400">Decoration</p>
                        </div>
                        <div class="border-bottom-cream mt-3">
                            <p class="text-size-22 text-weight-400">Door Windows</p>
                        </div>
                        <div class="border-bottom-cream mt-3">
                            <p class="text-size-22 text-weight-400">Home Land</p>
                        </div>
                        <div class="mt-3">
                            <p class="text-size-22 text-weight-400">Roof Installation</p>
                        </div>
                    </div>
                    <span class="text-size-20 text-font-dm text-weight-400">Tags</span>
                    <div class="d-flex align-items-center mt-3">
                        <span class="text-size-18 text-weight-400 bg-color-primary-2 text-white border-radius-10 ps-4 pe-4 pt-2 pb-2">Kitchen</span>
                        <span class="text-size-18 text-weight-400 bg-color-primary-3 border-radius-10 ps-4 pe-4 pt-2 pb-2 ms-2">Bedroom</span>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <span class="text-size-18 text-weight-400 bg-color-primary-3 border-radius-10 ps-4 pe-4 pt-2 pb-2">Building</span>
                        <span class="text-size-18 text-weight-400 bg-color-primary-3 border-radius-10 ps-4 pe-4 pt-2 pb-2 ms-2">Architecture</span>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <span class="text-size-18 text-weight-400 bg-color-primary-3 border-radius-10 ps-4 pe-4 pt-2 pb-2">Kitchen Planning</span>
                        <span class="text-size-18 text-weight-400 bg-color-primary-3 border-radius-10 ps-4 pe-4 pt-2 pb-2 ms-2">Bedroom</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection