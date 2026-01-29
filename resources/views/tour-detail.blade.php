@extends('dashboard.layout.main')
@section('content')
<main>
    <!-- tour detail section  -->
    <section class="tour-details">
        <div class="container">
                 <a href="tour.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i> Back To Home
          </a>
            <!-- IMAGE VIEWER ROW -->
            <div class="row">
                <div class="col-12">
                    <div class="viewer-wrapper position-relative">

                        <!-- THUMBNAILS -->
                        <div class="thumbs">
                            <div class="thumb active" data-index="0">
                                <img src="assets/images/banner-1.jpg">
                            </div>
                            <div class="thumb" data-index="1">
                                <img src="assets/images/banner-2 (2).jpg">
                            </div>
                            <div class="thumb" data-index="2">
                                <img src="assets/images/banner-3 (2).jpg">
                            </div>
                        </div>

                        <!-- BIG SLIDER -->
                        <div class="big-view owl-carousel">
                            <div class="slide"><img src="assets/images/banner-1.jpg"></div>
                            <div class="slide"><img src="assets/images/banner-2 (2).jpg"></div>
                            <div class="slide"><img src="assets/images/banner-3 (2).jpg"></div>
                        </div>

                        <span class="share-span">
                            <a href="#!" class="share-btn">
                                <img src="assets/images/share.png" alt="">
                            </a>
                        </span>

                    </div>
                </div>
            </div>

            <!-- CONTENT + BOOKING ROW -->
            <div class="row mt-4">

                <!-- LEFT CONTENT -->
                <div class="col-lg-8">
                    <h1 class="tour-title">Kashmir Valleys: Nature’s Paradise</h1>

                    <p class="tour-subtitle">
                        Experience snow-covered mountains, serene lakes, and scenic beauty.
                    </p>

                    <ul class="tour-meta">
                        <li><i class="fa-regular fa-clock"></i> 5 Days / 4 Nights</li>
                        <li><i class="fa-solid fa-users"></i> Family | Couple | Solo</li>
                        <li><i class="fa-solid fa-location-dot"></i> Kashmir</li>
                        <li><i class="fa-solid fa-star"></i> 4.8 (320 Reviews)</li>
                    </ul>

                    <h3 class="content-heading">Tour Overview</h3>
                    <p class="content-text">
                        Discover the beauty of Kashmir with a carefully planned itinerary that covers top attractions, comfortable stays, and unforgettable experiences—perfect for families, couples, and solo travelers.Discover the beauty of Kashmir with a carefully planned itinerary that covers top attractions, comfortable stays, and unforgettable experiences—perfect for families, couples, and solo travelers.Discover the beauty of Kashmir with a carefully planned itinerary that covers top attractions, comfortable stays, and unforgettable experiences—perfect for families, couples, and solo travelers.Discover the beauty of Kashmir with a carefully planned itinerary
                    </p>

                    <h3 class="content-heading">Tour Highlights</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <ul class="highlight-list">
                                <li>Visit the iconic Hawa Mahal with 953 intricately carved windows</li>
                                <li>Discover the astronomical wonders at Jantar Mantar</li>
                                <li>Traditional Rajasthani lunch at a heritage restaurant</li>
                                <li>Explore the magnificent City Palace</li>
                                <li>Visit the iconic Hawa Mahal with 953 intricately carved windows</li>
                                <li>Discover the astronomical wonders at Jantar Mantar</li>
                                <li>Traditional Rajasthani lunch at a heritage restaurant</li>
                                <li>Explore the magnificent City Palace</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="highlight-list">
                                <li>Walk through the vibrant Johari Bazaar</li>
                                <li>Professional photography assistance</li>
                                <li>Comfortable stays & guided tours</li>
                                <li>Verified travel partners</li>
                                <li>Walk through the vibrant Johari Bazaar</li>
                                <li>Professional photography assistance</li>
                                <li>Comfortable stays & guided tours</li>
                                <li>Verified travel partners</li>
                                <li>Verified travel partners</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- RIGHT BOOKING BOX -->
                <div class="col-lg-4">
                    <div class="booking-box">

                        <div class="price-box">
                            <h3>₹2,499 <span>₹2,999</span></h3>
                            <p>Per Person</p>
                        </div>

                        <form class="booking-form">
                            <label>People</label>
                            <input type="text" value="1 Adult">

                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name">

                            <label>Email Address</label>
                            <input type="email" placeholder="Enter your email">

                            <label>Phone Number</label>
                            <div class="phone-field">
                                <span>+91</span>
                                <input type="text" placeholder="Enter your number">
                            </div>

                            <label>Select Date</label>
                            <input type="date">

                            <label>Country</label>
                            <input type="text" value="India">

                            <label>City</label>
                            <input type="text">

                            <label>Additional message</label>
                            <textarea placeholder="Message here..."></textarea>

                            <button type="submit">Book Now</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- tour tab section  -->

    <section class="itinerary-section">
        <div class="container">

            <h2 class="section-title">Detailed Itinerary</h2>
            <hr>

            <div class="itinerary-wrapper">

                <!-- LEFT TABS -->
                <div class="itinerary-tabs">
                    <button class="tab-btn active" data-tab="itinerary">Itinerary</button>
                    <button class="tab-btn" data-tab="inclusion">Inclusion</button>
                    <button class="tab-btn" data-tab="details">Details</button>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="itinerary-content">

                    <!-- ITINERARY TAB -->
                    <div class="tab-content active" id="itinerary">
                        <h3> Kashmir Valleys: Nature’s Paradise</h3>

                        <div class="timeline">

                            <div class="timeline-item">
                                <span class="time">Day 1</span>
                                <div>
                                    <h4>Hotel Pickup</h4>
                                    <p>Comfortable pickup from your hotel in Jaipur city center</p>
                                </div>
                            </div>








                            <div class="timeline-item">
                                <span class="time">Day 2</span>
                                <div>
                                    <h4>Return to Hotel</h4>
                                    <p>
                                        Comfortable drop-off with beautiful memories.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- INCLUSION TAB -->
                    <div class="tab-content" id="inclusion">
                        <div class="inc-exc-wrap">

                            <!-- INCLUSIONS -->
                            <div class="inc-box">
                                <h4><i class="fa-solid fa-circle-check"></i> Inclusions</h4>
                                <ul>
                                    <li>Hotel pickup & drop</li>
                                    <li>Private AC vehicle</li>
                                    <li>Professional tour guide</li>
                                    <li>Monument entry tickets</li>
                                    <li>Lunch at heritage restaurant</li>
                                </ul>
                            </div>

                            <!-- EXCLUSIONS -->
                            <div class="exc-box">
                                <h4><i class="fa-solid fa-circle-xmark"></i> Exclusions</h4>
                                <ul>
                                    <li>Personal expenses</li>
                                    <li>Tips & gratuities</li>
                                    <li>Camera / video fees</li>
                                    <li>Anything not mentioned in inclusions</li>
                                </ul>
                            </div>

                        </div>
                    </div>


                    <!-- DETAILS TAB -->
                    <div class="tab-content" id="details">
                        <div class="details-grid">

                            <div class="detail-item">
                                <i class="fa-regular fa-clock"></i>
                                <div>
                                    <span>Tour Duration</span>
                                    <strong>Full Day</strong>
                                </div>
                            </div>

                            <div class="detail-item">
                                <i class="fa-regular fa-calendar"></i>
                                <div>
                                    <span>Best Time</span>
                                    <strong>October – March</strong>
                                </div>
                            </div>

                            <div class="detail-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <div>
                                    <span>Pickup Location</span>
                                    <strong>Jaipur City</strong>
                                </div>
                            </div>

                            <div class="detail-item">
                                <i class="fa-solid fa-users"></i>
                                <div>
                                    <span>Suitable For</span>
                                    <strong>Family, Couple, Solo</strong>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- related tour section  -->

    <section class="featured">
        <div class="container">

            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">Related Tour</h2>
                    <p class="section-subtitle mb-4 text-start">Navigate the Globe with Confidence</p>
                </li>
                <li><a href="#!">View All</a></li>
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


       <!-- also like  section  -->

    <section class="featured">
        <div class="container">

            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">You Might Also Like</h2>
                    <p class="section-subtitle mb-4 text-start">Favorite destinations based on customer reviews</p>
                </li>
                <li><a href="#!">View All</a></li>
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


</main>

<!-- SHARE POPUP -->
<div class="share-overlay" id="shareOverlay">
    <div class="share-popup">
        <div class="share-header">
            <h6>Share this</h6>
            <span class="close-share">&times;</span>
        </div>

        <div class="share-icons">
            <a href="#" class="share facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="share whatsapp-1"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="share linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="share telegram"><i class="fab fa-telegram-plane"></i></a>
            <a href="#" class="share copy"><i class="fa fa-link"></i></a>
        </div>
    </div>
</div>
@endsection
