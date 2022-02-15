@extends("layouts/app")

@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="banner-image">
            <img src="{{asset('storage/assets/images/banner/bg-01.jpeg')}}" alt="background banner">
        </div>
    </div>
    <div class="layout-1">
        <div class="container">
            <!-- Set up your HTML -->
            <div id="custom-owl-carousel" class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach($content as $slider)
                        <div class="owl-item">
                            <div class="owl-text">
                                <p>{{$slider->subtitle}}</p>
                                <h5>{{$slider->title}}</h5>
                                <p>{{$slider->description}}</p>
                            </div>
                            <img src="{{asset('storage/assets/images/'. $slider->content_type .'/' . $slider->image)}}" alt="...">
                        </div>
                        @endforeach
                        {{-- <div class="owl-item">
                            <div class="owl-text">
                                <p>The Product</p>
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            <img src="{{asset('storage/assets/images/thumb/coffee-candy.png')}}" alt="...">
                        </div>
                        <div class="owl-item">
                            <div class="owl-text">
                                <p>The Product</p>
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            <img src="{{asset('storage/assets/images/thumb/coffee-candy.png')}}" alt="...">
                        </div> --}}
                    </div>
                </div>
                <div id="custom-owl-dots" class="owl-dots">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-2 pb-4">
        <div class="container">
            <div class="card col-md-12" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-anchor-placement="top-bottom">
                <div class="card-image">
                    <img class="card-img-top rounded" src="{{asset('storage/assets/images/thumb/the-process.png')}}" alt="Card image">
                </div>
                <div class="card-body caption-thumbnail">
                    <p class="card-text">The Process</p>
                    <h5 class="card-title">Innovation born from Volcanic Mountain in Indonesia</h5>
                    <a href="#" class="btn btn-outline-light">Find Out more about the excellence</a>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-3 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" data-aos="zoom-in-up">
                        <div class="card-image">
                            <img class="card-img-top rounded" src="{{asset('storage/assets/images/thumb/the-journey.png')}}" alt="Card image">
                        </div>
                        <div class="card-body caption-thumbnail">
                            <p class="card-text">The Process</p>
                            <h5 class="card-title">Innovation born from Volcanic Mountain in Indonesia</h5>
                            <a href="#" class="btn btn-outline-light">Find Out more about the excellence</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" data-aos="zoom-in-up">
                        <div class="card-image">
                            <img class="card-img-top rounded" src="{{asset('storage/assets/images/thumb/the-philosophy.png')}}" alt="Card image">
                        </div>
                        <div class="card-body caption-thumbnail">
                            <p class="card-text">The Process</p>
                            <h5 class="card-title">Innovation born from Volcanic Mountain in Indonesia</h5>
                            <a href="#" class="btn btn-outline-light">Find Out more about the excellence</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-1">
            <div class="container">
                <p><i class="fas fa-globe"></i> Select Country</p>
            </div>
        </div>
        <div class="footer-2">
            <div class="container">
                <div class="row">
                    <div class="section-1 col-md-2">
                        <div class="footer-menu-list">
                            <p>OUR COLLECTION</p>
                            <ul>
                                <li>Coffee Candy</li>
                                <li>Ready to Drink</li>
                                <li>Ready to Served</li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-2 col-md-2">
                        <div class="footer-menu-list">
                            <p>OUR STORY</p>
                            <ul>
                                <li>The Process</li>
                                <li>The Journey</li>
                                <li>The Philosophy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-3 col-md-2">
                        <div class="footer-menu-list">
                            <p>STAY UPDATED</p>
                            <ul>
                                <li>News & Events</li>
                                <li>Contact us</li>
                                <li>Find your local representative</li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-4 col-md-6">
                        <p>SUBSCRIBE TO THE LATEST NEWS OF KOPIKO</p>
                        <form action="">
                            <input type="email" name="email" placeholder="Your Email Address">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-3">
            <div class="container">
                <img src="{{asset('storage/assets/images/coffee-house-logo.png')}}" alt="Coffee house logo">
                <div class="section-1">
                    <p>&copy;2021 The Coffe House</p>
                    <ul class="footer-sosmed">
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-youtube"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection