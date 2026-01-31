@extends('dashboard.layout.main')
@section('content')
<main>

  <!-- breadcum section   -->

  <section class="breadcrumb-section">
    <div class="breadcrumb-overlay"></div>

    <div class="container">
      <div class="breadcrumb-content text-center">
        <h1>Contact Us </h1>
        <ul class="breadcrumb-list">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>/</li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- contact form area  -->

  <section class="contact-section">
    <div class="container">
      <div class="row">

        <!-- LEFT FORM -->
        <div class="col-lg-7">
            <h3>Send Us a Message</h3>
            <p class="sub-text">
              Share your travel plans or questions, and our team will respond within 24 hours.
            </p>
          <div class="contact-form-card">
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <label>Full Name*</label>
                  <input type="text" class="form-control" placeholder="Your full name">
                </div>

                <div class="col-md-6">
                  <label>Email Address*</label>
                  <input type="email" class="form-control" placeholder="Your@gmail.com">
                </div>

                <div class="col-md-6">
                  <label>Phone Number*</label>
                  <input type="text" class="form-control" placeholder="+91 **********">
                </div>

                <div class="col-md-6">
                  <label>Preferred Travel Date</label>
                  <input type="date" class="form-control">
                </div>

                <div class="col-md-6">
                  <label>Group Size</label>
                  <select class="form-select">
                    <option>Select Group Size</option>
                    <option>1-2</option>
                    <option>3-5</option>
                    <option>6+</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label>Interested Destination</label>
                  <select class="form-select">
                    <option>Select Destination</option>
                    <option>India</option>
                    <option>Rajasthan</option>
                    <option>Kerala</option>
                  </select>
                </div>

                <div class="col-12">
                  <label>Subject*</label>
                  <input type="text" class="form-control" placeholder="What can you help this?">
                </div>

                <div class="col-12">
                  <label>Message*</label>
                  <textarea class="form-control" rows="4"
                    placeholder="Tell us about your dream trip to India..."></textarea>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn send-btn w-100">
                    Send Message
                  </button>
                </div>

                <div class="col-12">
                  <p class="privacy-text">
                    By submitting this form, you agree to our privacy policy.
                    We'll respond within 24 hours.
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- RIGHT INFO -->
        <div class="col-lg-5">
          <div class="contact-info">
            <h3>Get in Touch –<br>We're Here to Help!</h3>
            <p class="sub-text">
              Have questions or need assistance? Our team is always ready to guide you on your journey.
            </p>

            <div class="info-grid">
              <div>
                <h6>Call Center</h6>
                <p>(208) 555-0128</p>
              </div>
              <div>
                <h6>Our Location</h6>
                <p>1901 Thornridge Cir. Shiloh, Hawaii</p>
              </div>
              <div>
                <h6>Social Network</h6>
                <div class="contact-social-icons">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-linkedin-in"></i>
                </div>
              </div>
              <div>
                <h6>Email</h6>
                <p>nathan.roberts@example.com</p>
              </div>
            </div>

            <!-- MAP -->
            <div class="map-box mt-3">
              <iframe
                src="https://www.google.com/maps?q=Toronto&output=embed"
                loading="lazy">
              </iframe>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>





</main>
@endsection
