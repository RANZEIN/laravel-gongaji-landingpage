<section id="pricing" class="pricing position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <small class="fs-7 d-block">Pricing Plan</small>
                <h2 class="fs-3 pricing-head text-black mb-0 position-relative">What's About Our Pricing Subscription</h2>
            </div>
        </div>
        <div class="row plans">
            <div class="col-12 text-center">
                <div class="form-check form-switch d-flex justify-content-center ps-0 align-items-center">
                    <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Monthly</label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Yearly</label>
                </div>
                <div class="save d-inline-block position-relative text-warning fw-500 fs-9 text-center">Save Up To 58%</div>
            </div>
        </div>
        <div class="row justify-content-center price-plan">
            @foreach($plans as $plan)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card position-relative shadow border-0 h-100">
                    @if($plan['popular'])
                    <div class="position-absolute badge bg-warning d-inline-block mx-auto">
                        Most Popular
                    </div>
                    @endif
                    <div class="card-body pb-4">
                        <small class="fs-7 d-block text-warning text-center">{{ $plan['name'] }}</small>
                        <h2 class="mb-4 text-center position-relative">
                            <sub class="fs-2 text-black">{{ $plan['price'] }}</sub>
                            <sup class="fs-6 position-absolute">$</sup>
                        </h2>
                        <small class="fs-7 d-block text-center">{{ $plan['period'] }}</small>
                        <p class="fs-7 text-center fw-500">{{ $plan['description'] }}</p>
                        <ul class="list-unstyled mb-0 pl-0">
                            @foreach($plan['features'] as $feature)
                            <li class="d-flex align-items-start">
                                <i class="ti ti-circle-check fs-4 pe-2"></i>
                                <span class="fs-7 text-black">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                        <a href="#contact" class="btn btn-warning btn-hover-secondery text-capitalize">Get Started</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
