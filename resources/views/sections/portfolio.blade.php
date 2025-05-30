<section id="portfolio" class="portfolio position-relative bg-primary">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <small class="fs-7 d-block text-warning">Fitur Kami</small>
            </div>
            <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center">
                <h2 class="fs-3 text-white mb-0">Fitur-Fitur<br> Lainnya.</h2>
                <a href="#pricing" class="btn btn-warning btn-hover-secondery section-btn">Claim Voucher</a>
            </div>
        </div>
        <div class="row d-flex flex-wrap justify-content-center step-row">
            @foreach($features as $feature)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center">
                            <i class="ti {{ $feature['icon'] }} text-white"></i>
                        </div>
                        <h3 class="fs-4 text-white">{{ $feature['title'] }}</h3>
                        <p class="fs-7 mb-0 fw-500">{{ $feature['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container position-relative">
        <div class="portfolio-wrap">
            <div class="owl-carousel owl-theme portfolio-slider">
                @for($i = 1; $i <= 10; $i++)
                <div class="item">
                    <a href="#">
                        <img src="{{ asset('assets/images/portfolio/Iphone-' . $i . '.webp') }}" class="w-50" alt="Portfolio {{ $i }}">
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
