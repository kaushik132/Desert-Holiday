@extends('dashboard.layout.main')
@section('content')
<main>
    <!-- hero section   -->

    <section class="hero-section">

        <div class="hero-bg" style="background-image:url('assets/images/banner-1.jpg');"></div>
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <h1>Your Perfect Trip Starts Here</h1>
            <p>
                Discover carefully curated tour packages with transparent pricing, expert planning, and end-to-end travel support for a smooth and memorable journey.
            </p>

            <div class="hero-buttons">
                <a href="#" class="theme-btn">Start Exploring</a>
                <a href="#" class="theme-btn-2">
                    <i class="fa-solid fa-phone"></i> Talk to a Travel Expert
                </a>
            </div>
        </div>

        <!-- CARD SLIDER -->
        <div class="card-slider-wrapper">
            <div class="owl-carousel cardCarousel">
            @foreach ($destinationCategories as $destinationCategories)
                <div class="destination-card">
                    <img src="{{url('uploads/'. $destinationCategories->image) }}" alt="{{ $destinationCategories->alt }}">
                    <h6>{{ $destinationCategories->name }}</h6>
                    <p>{{ $destinationCategories->short_description }}</p>
                </div>

            @endforeach

            </div>
        </div>

        <div class="custom-arrows">
            <button class="arrow-prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="arrow-next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </section>

    <!-- categrory section  -->


    <section class="category position-relative">
        <div class="container">
            <h2 class="section-title text-center">Explore Top Destinations in India</h2>
            <p class="section-subtitle text-center mb-4">Navigate the Globe with Confidence</p>

            <!-- Owl Carousel Wrapper -->
            <div class="owl-carousel category-carousel">

@foreach ($destinationCategoriess as $destinationCategoriesss)
                <a href="{{ url('destination/'.$destinationCategoriesss->slug) }}">
                    <div class="category-item text-center">
                        <img src="{{url('uploads/'. $destinationCategoriesss->image) }}" class="rounded-circle" alt="{{ $destinationCategoriesss->alt }}">
                        <h6 class="category-title mt-3">{{ $destinationCategoriesss->name }}</h6>
                        <p class="category-subtitle">{{ $destinationCategoriesss->short_description }}</p>
                    </div>

                </a>
                @endforeach
         

            </div>

            <!-- Custom Arrows -->


        </div>
        <div class="custom-arrows">
            <button class="arrow-prev-cate"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="arrow-next-cate"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </section>

    <!-- featured section  -->

    <section class="featured">
        <div class="container">

            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">Explore Top Destinations in India</h2>
                    <p class="section-subtitle text-start">Navigate the Globe with Confidence</p>
                </li>
                <li><a href="tour.php">View All</a></li>
            </ul>

            <div class="owl-carousel featured-carousel">

                <div class="item">
                    <article>
                        <a href="tour-detail.php">
                            <div class="featured-card">
                                <div class="featured-img">
                                    <img src="assets/images/destina.webp" alt="">
                                    <div class="top-btn-icon">
                                        <div class="top-btn"><small>Top Rated</small></div>
                                        <div class="top-icon">
                                            <img src="assets/images/heart.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-content">
                                    <h3>Kashmir Valleys: Nature’s Paradise</h3>

                                    <span><i class="fa-solid fa-clock"></i> 2 days 3 nights</span>
                                    &nbsp;&nbsp;
                                    <span><i class="fa-solid fa-clock"></i> 2 days 3 nights</span>

                                    <ul>
                                        <li>
                                            <span class="main-price">₹4888</span>
                                            <span>/ person</span>
                                        </li>
                                        <li class="theme-btn cus-btn">Book Now</li>
                                    </ul>

                                    <span class="badge">★ 4.6 (98 reviews)</span>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>



            </div>

        </div>
    </section>


    <!-- why choose section  -->

    <section class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <h2 class="section-heading">Why Travelers<br>Choose Us</h2>
                    <p class="section-desc">
                        We focus on comfort, transparency, and memorable experiences
                        to make every journey stress-free.
                    </p>

                    <ul class="feature-list">
                        <li>
                            <span class="check"><img src="assets/images/correct.png" alt=""></span>
                            <div>
                                <h6>Expert Travel Planning</h6>
                                <p>Carefully designed itineraries created by experienced travel professionals.</p>
                            </div>
                        </li>

                        <li>
                            <span class="check"><img src="assets/images/correct.png" alt=""></span>
                            <div>
                                <h6>Transparent Pricing</h6>
                                <p>No hidden charges – what you see is what you pay.</p>
                            </div>
                        </li>

                        <li>
                            <span class="check"><img src="assets/images/correct.png" alt=""></span>
                            <div>
                                <h6>24/7 Customer Support</h6>
                                <p>Our support team is available anytime during your journey.</p>
                            </div>
                        </li>

                        <li>
                            <span class="check"><img src="assets/images/correct.png" alt=""></span>
                            <div>
                                <h6>Verified Stays & Services</h6>
                                <p>Handpicked hotels and trusted partners for a comfortable stay.</p>
                            </div>
                        </li>

                        <li>
                            <span class="check"><img src="assets/images/correct.png" alt=""></span>
                            <div>
                                <h6>Trusted by Travelers</h6>
                                <p>Thousands of happy travelers and positive reviews you can rely on.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- RIGHT IMAGES -->
                <div class="col-lg-6 position-relative">
                    <div class="image-wrap">

                        <div class="circle-img large cir-same">
                            <img src="assets/images/destina.webp" alt="">
                        </div>

                        <div class="circle-img medium top cir-same">
                            <img src="assets/images/destina.webp" alt="">
                        </div>

                        <div class="circle-img small">
                            <img src="assets/images/destina.webp" alt="">
                        </div>

                        <div class="circle-img mini-small">
                            <img src="assets/images/destina.webp" alt="">
                        </div>

                        <!-- dotted design -->
                        <div class="dot-pattern"></div>
                        <div class="dot-pattern-2"></div>


                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- top travel section  -->

    <section class="top-travel">
        <div class="container">
            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">Top Travel Categories</h2>
                    <p class="section-subtitle text-start">Find the perfect travel experience based on your interests and travel style.</p>
                </li>
                <li><a href="#!">View All</a></li>
            </ul>


            <div class="owl-carousel top-travel-slider">

                <div class="item">
                    <div class="top-travel-card">
                        <img src="assets/images/destina.webp" alt="Kashmir Valleys">

                        <!-- TOP BADGE -->
                        <span class="top-badge">Top Rated</span>

                        <!-- BOTTOM TITLE -->
                        <div class="card-footer">
                            <h4>Kashmir Valleys</h4>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>


    <!-- testimonials section  -->
    <section class="testimonials position-relative">
        <div class="container">
            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">Top Travel Categories</h2>
                    <p class="section-subtitle mb-4 text-start">Find the perfect travel experience based on your interests and travel style.</p>
                </li>
                <li></li>
            </ul>


            <div class="owl-carousel testimonial-slider">

                <div class="item">
                    <div class="testimonial-card">
                        <h6>The best booking system</h6>
                        <p class="testi-p">I've been using the hotel booking system for several years
                            now, and it's become my go-to platform for planning my
                            trips. The interface is user-friendly, and I appreciate the
                            detailed information and real-time availability of hotels.</p>

                        <ul class="">
                            <li class="profile-content">
                                <img src="assets/images/pro.png" alt="">
                                <div class="">
                                    <span>Sara Mohamed</span>
                                    <p>Jakatar</p>

                                </div>
                            </li>
                            <li>
                                <img src="assets/images/star.svg.png" alt="">
                                <img src="assets/images/star.svg.png" alt="">
                                <img src="assets/images/star.svg.png" alt="">
                                <img src="assets/images/star.svg.png" alt="">
                                <img src="assets/images/star.svg.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>



            </div>

        </div>
        <div class="custom-arrows">
            <button class="arrow-prev-testi"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="arrow-next-testi"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </section>

    <!-- gallery section  -->
    <section class="travel-gallery">
        <div class="container">

            <!-- HEADER -->
            <div class="gallery-header d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="section-title text-start">Travel Moments Gallery</h2>
                    <p class="section-subtitle mb-4 text-start">Real stories shared by travelers</p>

                </div>

                <!-- FILTER TABS -->
                <ul class="gallery-tabs d-flex gap-2">
                    <li class="active" data-filter="all">All</li>
                    <li data-filter="heritage">Heritage</li>
                    <li data-filter="mountain">Mountain</li>
                    <li data-filter="beach">Beach</li>
                    <li data-filter="spiritual">Spiritual</li>
                </ul>
            </div>

            <div class="row">
                <!-- LEFT BIG SLIDER -->
                <div class="col-lg-5 position-relative">
                    <div class="big-slider owl-carousel">
                        <div class="big-slide" data-category="heritage">
                            <img src="assets/images/banner-1.jpg">
                            <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="mountain">
                            <img src="assets/images/banner-2 (2).jpg">
                               <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="beach">
                            <img src="assets/images/banner-3 (2).jpg">
                              <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="spiritual">
                            <img src="assets/images/desti.jpg">
                              <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="heritage">
                            <img src="assets/images/banner-1.jpg">
                              <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="mountain">
                            <img src="assets/images/banner-2 (2).jpg">
                              <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="beach">
                            <img src="assets/images/banner-3 (2).jpg">
                             <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="spiritual">
                            <img src="assets/images/desti.jpg">
                             <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>
                        <div class="big-slide" data-category="spiritual">
                            <img src="assets/images/desti.jpg">
                              <div class="slide-text">
                                <h2>Kashmir Valleys: Nature’s Paradise</h2>
                                <span>Jammu-Kashmir</span>
                            </div>
                        </div>

                    </div>
                    <div class="border-frame">

                    </div>

                </div>

                <!-- RIGHT THUMB GRID -->
                <div class="col-lg-7">
                    <div class="thumb-grid">
                        <div class="thumb-item" data-index="0" data-category="heritage">
                            <img src="assets/images/banner-1.jpg">
                        </div>
                        <div class="thumb-item" data-index="1" data-category="mountain">
                            <img src="assets/images/banner-2 (2).jpg">
                        </div>
                        <div class="thumb-item" data-index="2" data-category="beach">
                            <img src="assets/images/banner-3 (2).jpg">
                        </div>
                        <div class="thumb-item" data-index="3" data-category="spiritual">
                            <img src="assets/images/desti.jpg">
                        </div>
                        <div class="thumb-item" data-index="0" data-category="heritage">
                            <img src="assets/images/banner-1.jpg">
                        </div>
                        <div class="thumb-item" data-index="1" data-category="mountain">
                            <img src="assets/images/banner-2 (2).jpg">
                        </div>
                        <div class="thumb-item" data-index="2" data-category="beach">
                            <img src="assets/images/banner-3 (2).jpg">
                        </div>
                        <div class="thumb-item" data-index="3" data-category="spiritual">
                            <img src="assets/images/desti.jpg">
                        </div>
                        <div class="thumb-item" data-index="3" data-category="spiritual">
                            <img src="assets/images/desti.jpg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- travel story-->
    <section class="travel-story">
        <div class="container">

            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">Travel Stories & Guides</h2>
                    <p class="section-subtitle mb-4 text-start">Real stories and genuine experiences shared by travelers who explored with us.</p>
                </li>
                <li><a href="#!">View All</a></li>
            </ul>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <article>
                        <a href="#!">
                            <div class="featured-card">
                                <div class="featured-img">
                                    <img src="assets/images/destina.webp" alt="">
                                    <div class="top-btn-icon">
                                        <div class="top-btn"><small>Cultural</small></div>
                                        <div class="top-icon">
                                            <img src="assets/images/heart.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-content">
                                    <span><i class="fa-regular fa-calendar-days"></i> 18 Sep 2024</span>
                                    &nbsp;
                                    <span><i class="fa-solid fa-clock"></i> 6 mins</span>
                                    &nbsp;
                                    <span><i class="fa-regular fa-comment-dots"></i>38 comments</span>


                                    <h3>Ultimate Travel Planning Guide:10 Tips for a Seamless Journey</h3>



                                    <ul class="story-p">
                                        <li>
                                            <span><img src="assets/images/pro.png" alt=""></span>
                                            <span>Jimmy Dave</span>
                                        </li>
                                        <li><span class="reading">keep Reading</span></li>
                                    </ul>


                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article>
                        <a href="#!">
                            <div class="featured-card">
                                <div class="featured-img">
                                    <img src="assets/images/destina.webp" alt="">
                                    <div class="top-btn-icon">
                                        <div class="top-btn"><small>Cultural</small></div>
                                        <div class="top-icon">
                                            <img src="assets/images/heart.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-content">
                                    <span><i class="fa-regular fa-calendar-days"></i> 18 Sep 2024</span>
                                    &nbsp;
                                    <span><i class="fa-solid fa-clock"></i> 6 mins</span>
                                    &nbsp;
                                    <span><i class="fa-regular fa-comment-dots"></i>38 comments</span>


                                    <h3>Ultimate Travel Planning Guide:10 Tips for a Seamless Journey</h3>



                                    <ul class="story-p">
                                        <li>
                                            <span><img src="assets/images/pro.png" alt=""></span>
                                            <span>Jimmy Dave</span>
                                        </li>
                                        <li><span class="reading">keep Reading</span></li>
                                    </ul>


                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article>
                        <a href="#!">
                            <div class="featured-card">
                                <div class="featured-img">
                                    <img src="assets/images/destina.webp" alt="">
                                    <div class="top-btn-icon">
                                        <div class="top-btn"><small>Cultural</small></div>
                                        <div class="top-icon">
                                            <img src="assets/images/heart.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-content">
                                    <span><i class="fa-regular fa-calendar-days"></i> 18 Sep 2024</span>
                                    &nbsp;
                                    <span><i class="fa-solid fa-clock"></i> 6 mins</span>
                                    &nbsp;
                                    <span><i class="fa-regular fa-comment-dots"></i>38 comments</span>


                                    <h3>Ultimate Travel Planning Guide:10 Tips for a Seamless Journey</h3>



                                    <ul class="story-p">
                                        <li>
                                            <span><img src="assets/images/pro.png" alt=""></span>
                                            <span>Jimmy Dave</span>
                                        </li>
                                        <li><span class="reading">keep Reading</span></li>
                                    </ul>


                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article>
                        <a href="#!">
                            <div class="featured-card">
                                <div class="featured-img">
                                    <img src="assets/images/destina.webp" alt="">
                                    <div class="top-btn-icon">
                                        <div class="top-btn"><small>Cultural</small></div>
                                        <div class="top-icon">
                                            <img src="assets/images/heart.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-content">
                                    <span><i class="fa-regular fa-calendar-days"></i> 18 Sep 2024</span>
                                    &nbsp;
                                    <span><i class="fa-solid fa-clock"></i> 6 mins</span>
                                    &nbsp;
                                    <span><i class="fa-regular fa-comment-dots"></i>38 comments</span>


                                    <h3>Ultimate Travel Planning Guide:10 Tips for a Seamless Journey</h3>



                                    <ul class="story-p">
                                        <li>
                                            <span><img src="assets/images/pro.png" alt=""></span>
                                            <span>Jimmy Dave</span>
                                        </li>
                                        <li><span class="reading">keep Reading</span></li>
                                    </ul>


                                </div>
                            </div>
                        </a>
                    </article>
                </div>



            </div>

        </div>
    </section>






</main>
@endsection
