<section id="contact" class="contact bg-primary position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="dots-shape-left position-absolute">
            <img src="{{ asset('assets/images/icons/dot-shape.png') }}" alt="Decoration">
        </div>
        <div class="dots-shape-right position-absolute">
            <img src="{{ asset('assets/images/icons/dot-shape.png') }}" alt="Decoration">
        </div>
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <small class="fs-7 d-block text-warning">Join us Now</small>
                <h2 class="fs-3 text-white mb-0">Ready to try the product for free?</h2>
                <div class="owl-carousel owl-theme testimonial">
                    @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="details position-relative">
                            <p class="fs-5 fw-light blue-light mb-4">
                                "{{ $testimonial['text'] }}"
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="avtar-img rounded-circle overflow-hidden">
                                    <img src="{{ asset('assets/images/contact/' . $testimonial['image']) }}" class="img-fluid" alt="{{ $testimonial['name'] }}">
                                </div>
                                <div class="name ps-3">
                                    <h6 class="text-white">{{ $testimonial['name'] }}</h6>
                                    <small class="d-block blue-light fw-500 fs-10 pb-0">{{ $testimonial['position'] }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <form class="position-relative" method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="row ps-xxl-5 ps-xl-5 ps-lg-3 ps-md-0 ps-sm-0 ps-0">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label text-white fs-7 mb-3">Full Name</label>
                                <input type="text" name="full_name" class="form-control border-0" placeholder="Enter your name" required>
                                @error('full_name')
                                    <small class="text-warning">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="form-label text-white fs-7 mb-3">User Name</label>
                                <input type="text" name="username" class="form-control border-0" placeholder="Enter your username" required>
                                @error('username')
                                    <small class="text-warning">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label text-white fs-7 mb-3">Email address</label>
                                <input type="email" name="email" class="form-control border-0" placeholder="Enter your email address" required>
                                @error('email')
                                    <small class="text-warning">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label text-white fs-7 mb-3">Password</label>
                                <input type="password" name="password" class="form-control border-0" placeholder="Enter your password" required>
                                @error('password')
                                    <small class="text-warning">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="agree fs-7 fw-500">
                            By clicking on the Sign Up button, you agree to Gongaji.<br>
                            <a href="#" class="text-warning text-decoration-none">terms and conditions of use.</a>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning btn-hover-secondery text-capitalize mt-2 w-auto contact-btn">Try for Free</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="trusted-companies">
            <div class="row justify-content-center">
                <div class="col-xx-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <h3 class="fs-7 mb-0 text-white text-center">Trusted by content creators across the world</h3>
                    <ul class="d-flex flex-wrap align-items-center list-unstyled mb-0 pl-0 owl-carousel owl-theme trusted-logos">
                        @foreach($companies as $company)
                        <li class="text-center item">
                            <a href="#">
                                <img src="{{ asset('assets/images/contact/' . $company['logo']) }}" alt="{{ $company['name'] }}">
                            </a>
                        </li>
                        @endforeach
                        @foreach($companies as $company)
                        <li class="text-center item">
                            <a href="#">
                                <img src="{{ asset('assets/images/contact/' . $company['logo']) }}" alt="{{ $company['name'] }}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
