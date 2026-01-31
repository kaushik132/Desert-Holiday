@extends('dashboard.layout.main')
@section('content')
<main>

  <!-- breadcum section   -->

  <section class="breadcrumb-section">
    <div class="breadcrumb-overlay"></div>

    <div class="container">
      <div class="breadcrumb-content text-center">
        <h1>Blogs </h1>
        <ul class="breadcrumb-list">
          <li><a href="{{url('/')}}">Home</a></li>
          <li>/</li>
          <li>Blogs</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- blog sec area  -->
  <section class="blog-section">

    <div class="container">
      <!-- HEADER -->
      <div class="d-flex justify-content-between align-items-center mb-2 md-mb-4">
        <h3 class="section-title m-0">Recent Blog</h3>
        <a href="#" class="view-all-btn">
          View All <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <div class="row g-4">

        <!-- LEFT BIG BLOG -->
        <div class="col-lg-6">
          <a href="{{'blog-detail'}}">
            <div class="blog-card blog-large p-0">
              <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="">
              <div class="blog-overlay">
                <span class="blog-tag custom-b-span">NEWS</span>
                <h4>Essential Travel Tips For A Smooth And Stress-Free Journey</h4>
                <div class="blog-meta">

                  <span><i class="fa-regular fa-calendar"></i> 27 August, 2024</span>

                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- RIGHT SMALL BLOGS -->
        <div class="col-lg-6">
          <div class="row g-4">

            <!-- BLOG ITEM -->
            <div class="col-lg-12 col-md-6">
              <a href="{{'blog-detail'}}">
                <div class="blog-card blog-small d-flex">
                  <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
                  <div class="blog-content">
                    <span class="blog-tag">TECHNOLOGY</span>
                    <h5>Iphone Devices Are Going To Incredible Now A Days</h5>
                    <div class="blog-meta">
                      <span>By Admin</span> • <span>27 August, 2024</span> • <span>20 Mins</span>
                    </div>
                    <p>
                      Browned butter and brown sugar are caramelly goodness,
                      crispy edges and soft centers...
                    </p>
                    <a href="{{'blog-detail'}}" class="read-more">
                      Read More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </a>
            </div>

            <!-- BLOG ITEM -->
            <div class="col-lg-12 col-md-6">
              <a href="{{'blog-detail'}}">
                <div class="blog-card blog-small d-flex">
                  <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
                  <div class="blog-content">
                    <span class="blog-tag">TECHNOLOGY</span>
                    <h5>Iphone Devices Are Going To Incredible Now A Days</h5>
                    <div class="blog-meta">
                      <span>By Admin</span> • <span>27 August, 2024</span> • <span>20 Mins</span>
                    </div>
                    <p>
                      Browned butter and brown sugar are caramelly goodness,
                      crispy edges and soft centers...
                    </p>
                    <a href="{{'blog-detail'}}" class="read-more">
                      Read More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="container mt-3">
        <h3 class="section-title text-start mt-2">Trending Blog</h3>
      <div class="owl-carousel blog-slider">
@foreach ($blogList as $blog)


        <div class="item">
          <a href="{{'blog-detail'}}">
            <div class="blog-card blog-small d-flex">
              <img src="{{url('uploads/'.$blog->image)}}" alt="{{$blog->alt}}">
              <div class="blog-content">
                <span class="blog-tag">TECHNOLOGY</span>
                <h5>Iphone Devices Are Going To Incredible Now A Days</h5>
                <div class="blog-meta">
                  <span>By Admin</span> • <span>27 August, 2024</span> • <span>20 Mins</span>
                </div>
                <p>
                  Browned butter and brown sugar are caramelly goodness,
                  crispy edges and soft centers...
                </p>
                <a href="{{'blog-detail'}}" class="read-more">
                  Read More <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </a>
        </div>

        @endforeach



      </div>

    </div>





  </section>





</main>
@endsection
