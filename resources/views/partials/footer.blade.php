<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="footer-logo-col">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/footer/Logo.svg') }}" alt="Gongaji Logo">
                    </a>
                    <p class="blue-light mb-0 fs-7 fw-500">Gongaji is a simple, elegant, and secure way to build your business and project portfolio.</p>
                    <div class="callus text-white fw-500 fs-7">
                        1989 Don Jackson Lane
                        <div class="blue-light">Call us: <a href="tel:808-956-9599" class="text-warning fw-500 fs-7 text-decoration-none">808-956-9599</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                <h5 class="text-white">Social</h5>
                <ul class="list-unstyled mb-0 pl-0">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                <h5 class="text-white">Company</h5>
                <ul class="list-unstyled mb-0 pl-0">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Legal & Privacy</a></li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="subscribe">
                    <h5 class="text-white">Subscribe</h5>
                    <p class="blue-light fw-500">Subscribe to get the latest news from us</p>
                    <form action="{{ route('subscribe') }}" method="POST" class="input-group">
                        @csrf
                        <input type="email" name="email" class="form-control br-15" placeholder="Enter email address" aria-label="Enter email address" required>
                        <button class="btn btn-warning btn-hover-secondery ms-xxl-2 ms-xl-2 ls-lg-0 ms-md-0 ms-sm-0 ms-0" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyrights text-center blue-light fw-500">
            @<span id="autodate">{{ date('Y') }}</span> - All Rights Reserved by
            <a href="https://gongaji.com/" class="blue-light text-decoration-none">Gongaji.com</a>
        </div>
    </div>
</footer>
