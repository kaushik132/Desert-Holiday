@extends('dashboard.layout.main')
@section('content')
<main>

  <section class="blog-detail-section py-4">
    <div class="container">
      <div class="row g-4">

        <!-- LEFT CONTENT -->
        <div class="col-lg-8">

          <a href="{{url('blog')}}" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i> Back To Home
          </a>

          <h1 class="blog-title">
            A Complete Travel Guide for First-Time Travelers
          </h1>

          <div class="blog-meta mb-3">

            <span><i class="fa-regular fa-calendar"></i> 27 August, 2024</span>

          </div>

          <div class="blog-featured-img">
            <img src="assets/images/blog.jpg" alt="">
          </div>

          <div class="blog-content mt-4">
            <p>
              From planning and packing to exploring and returning safely, this guide
              covers everything you need to know. Escape your daily routine with short
              trips to beautiful locations ideal for relaxation and quick adventures.
            </p>

            <p>
              From planning and packing to exploring and returning safely, this guide
              covers everything you need to know. Escape your daily routine with short
              trips to beautiful locations ideal for relaxation and quick adventures.
            </p>

            <p>
              From planning and packing to exploring and returning safely, this guide
              covers everything you need to know. Escape your daily routine with short
              trips to beautiful locations ideal for relaxation and quick adventures.
            </p>
          </div>

        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="col-lg-4">

          <!-- RECENT POSTS -->
          <div class="sidebar-box">
            <h5 class="sidebar-title">Recent Blog</h5>

            <div class="recent-post-item d-flex align-items-start">


              <div class="recent-post-content">
                <span class="tag gadget">GADGET</span>
                <h6>
                  Essential Travel Tips For A Smooth And Stress-Free Journey
                </h6>
                <span class="date">
                  <i class="fa-regular fa-calendar"></i> 27 August, 2024
                </span>
              </div>

              <div class="recent-post-img">
                <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
              </div>
            </div>
            <div class="recent-post-item d-flex align-items-start">


              <div class="recent-post-content">
                <span class="tag gadget">GADGET</span>
                <h6>
                  Essential Travel Tips For A Smooth And Stress-Free Journey
                </h6>
                <span class="date">
                  <i class="fa-regular fa-calendar"></i> 27 August, 2024
                </span>
              </div>

              <div class="recent-post-img">
                <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
              </div>
            </div>
            <div class="recent-post-item d-flex align-items-start">


              <div class="recent-post-content">
                <span class="tag gadget">GADGET</span>
                <h6>
                  Essential Travel Tips For A Smooth And Stress-Free Journey
                </h6>
                <span class="date">
                  <i class="fa-regular fa-calendar"></i> 27 August, 2024
                </span>
              </div>

              <div class="recent-post-img">
                <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
              </div>
            </div>
            <div class="recent-post-item d-flex align-items-start">


              <div class="recent-post-content">
                <span class="tag gadget">GADGET</span>
                <h6>
                  Essential Travel Tips For A Smooth And Stress-Free Journey
                </h6>
                <span class="date">
                  <i class="fa-regular fa-calendar"></i> 27 August, 2024
                </span>
              </div>

              <div class="recent-post-img">
                <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
              </div>
            </div>
            <div class="recent-post-item d-flex align-items-start">


              <div class="recent-post-content">
                <span class="tag gadget">GADGET</span>
                <h6>
                  Essential Travel Tips For A Smooth And Stress-Free Journey
                </h6>
                <span class="date">
                  <i class="fa-regular fa-calendar"></i> 27 August, 2024
                </span>
              </div>

              <div class="recent-post-img">
                <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
              </div>
            </div>


          </div>

          <!-- SUBSCRIBE -->
          <div class="sidebar-box mt-4 subscribe-box">
            <h5 class="sidebar-title">Subscribe & Followers</h5>

            <div class="subscribe-social-list">
              <a href="#" class="subscribe-social-item">
                <i class="fa-brands fa-facebook-f"></i> Facebook
              </a>
              <a href="#" class="subscribe-social-item">
                <i class="fa-brands fa-twitter"></i> Twitter
              </a>
              <a href="#" class="subscribe-social-item">
                <i class="fa-brands fa-instagram"></i> Instagram
              </a>
              <a href="#" class="subscribe-social-item">
                <i class="fa-brands fa-youtube"></i> Youtube
              </a>
            
            </div>
          </div>


        </div>

      </div>
    </div>
  </section>



</main>
@endsection
