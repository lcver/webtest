@extends("layouts/app")

@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="banner-image">
            <img src="{{asset('storage/assets/images/banner/bg-01.jpeg')}}" alt="background banner">
        </div>
    </div>
    <div class="layout-1">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <p>The Product</p>
                        <h5>Premium Coffee Beans</h5>
                        <p>Our selected premium coffee beans, freshly picked from the volcanic soils.</p>
                    </div>
                    <img src="{{asset('storage/assets/images/thumb/coffee-candy.png')}}" width="500" alt="...">
                    <div class="clearfix"></div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <p>The Product</p>
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    <img src="{{asset('storage/assets/images/thumb/coffee-candy.png')}}" width="500" alt="...">
                    <div class="clearfix"></div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <p>The Product</p>
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    <img src="{{asset('storage/assets/images/thumb/coffee-candy.png')}}" width="500" alt="...">
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-2">
        <div class="container">
            <div class="card col-md-12">
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
    <div class="layout-3 pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
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
                    <div class="card">
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