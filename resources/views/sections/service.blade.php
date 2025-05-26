<section id="service" class="service position-relative overflow-hidden">
    <div class="container position-relative">
        <img src="{{ asset('assets/images/service/dot-shape.png') }}" class="shape position-absolute" alt="Decoration">
        <div class="row">
            <div class="col-12"><small class="fs-7 d-block">Working Process</small></div>
            <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center">
                <h2 class="fs-2 text-black mb-0">Our Featured Service<br> that We Provide</h2>
                <a href="#portfolio" class="btn btn-warning btn-hover-secondery section-btn">All Services</a>
            </div>
        </div>
        <div class="row d-flex flex-wrap justify-content-center step-row">
            @foreach($services as $index => $service)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                            <i class="ti {{ $service['icon'] }} text-primary position-relative"></i>
                        </div>
                        <h5 class="mb-0 fw-500">{{ $service['step'] }}</h5>
                        <h3 class="fs-4">{{ $service['title'] }}</h3>
                        <p class="fs-7 mb-0 fw-500">{{ $service['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
