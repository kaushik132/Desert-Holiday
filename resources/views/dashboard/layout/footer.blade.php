<!-- footer -->

<footer class="site-footer text-white">
    <div class="footer-overlay">
        <div class="container">
            <div class="row">

                <!-- Column 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="assets/images/logo.png" alt="Logo" class="mb-3 f-logo">
                    <p>
                        ShipX delivers reliable and tech-driven logistics solutions that simplify global shipping
                        for modern businesses.
                    </p>
                    <div class="social-icons mt-2" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="200">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex custom-footer-divide">
                    <div class="links-bx">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Solutions</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="support-bx">
                        <h5 class="footer-title">Destinations</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Rajasthan</a></li>
                            <li><a href="#">Kashmir</a></li>
                            <li><a href="#">Uttarakhand</a></li>
                            <li><a href="#">Goa</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex custom-footer-divide">

                    <ul class="list-unstyled">
                        <h5 class="footer-title">Contact Us</h5>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <ul class="list-unstyled">
                        <p>
                            <a href="#" class="contact-link">
                                123 Tourism Street, New Delhi, India 110001
                            </a>
                        </p>
                        <p>
                            <a href="tel:+919876543210" class="contact-link">
                                +91 9876543210
                            </a>
                        </p>
                        <p>
                            <a href="mailto:info@indiatours.com" class="contact-link">
                                info@indiatours.com
                            </a>
                        </p>
                    </ul>

                </div>

            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <div class="fb-ul">
                <p>© 2025 ShipX. All Rights Reserved.</p>
                <ul class="f-ul">
                    <li>
                        <a href="#" class="back-top-link">
                            Terms & Condition
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</footer>

<!-- login pop form  -->

<div class="modal fade custom-auth-modal" id="loginModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title">Welcome Back</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>

          <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
          </div>

          <button class="btn btn-dark w-100">Login</button>

          <p class="text-center mt-3 mb-0 small">
            Don’t have an account?
            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- sign up pop form  -->

<div class="modal fade custom-auth-modal" id="signupModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="Enter full name">
          </div>

          <div class="mb-3">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>

          <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Create password">
          </div>

          <button class="btn btn-dark w-100">Create Account</button>

          <p class="text-center mt-3 mb-0 small">
            Already have an account?
            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Bootstrap JS Bundle -->
<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/isotope-pkd-min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<!-- <script src="{{asset('assets/js/aos.js')}}" type="text/javascript"></script> -->
<script src="{{asset('assets/js/custom.js')}}" type="text/javascript" defer></script>




</body>

</html>
