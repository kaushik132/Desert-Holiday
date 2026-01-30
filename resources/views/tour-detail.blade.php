@extends('dashboard.layout.main')
@section('content')
    <style>
        .two-column-list ul {
            column-count: 2;
            column-gap: 30px;
            padding-left: 18px;
        }

        .two-column-list li {
            break-inside: avoid;
            margin-bottom: 8px;
        }

        @media (max-width: 768px) {
            .two-column-list ul {
                column-count: 1;
            }
        }
    </style>
    <main>
        <!-- tour detail section  -->
        <section class="tour-details">
            <div class="container">
                <a href="{{ url('destination') }}" class="back-btn">
                    <i class="fa-solid fa-arrow-left"></i> Back To Home
                </a>
                <!-- IMAGE VIEWER ROW -->
                <div class="row">
                    <div class="col-12">
                        <div class="viewer-wrapper position-relative">
                            <div class="thumbs">
                                @foreach ($destinationsData->gallery as $index => $item)
                                    <div class="thumb {{ $index == 0 ? 'active' : '' }}" data-index="{{ $index }}">
                                        <img src="{{ asset('uploads/' . $item) }}"
                                            alt="{{ pathinfo($item, PATHINFO_FILENAME) }}">
                                    </div>
                                @endforeach
                            </div>


                            <!-- BIG SLIDER -->
                            <div class="big-view owl-carousel">
                                @foreach ($destinationsData->gallery as $item)
                                    <div class="slide">
                                        <img src="{{ asset('uploads/' . $item) }}"
                                            alt="{{ pathinfo($item, PATHINFO_FILENAME) }}">
                                    </div>
                                @endforeach
                            </div>




                            <span class="share-span">
                                <a href="#!" class="share-btn">
                                    <img src="{{ asset('assets/images/share.png') }}" alt="Share Icon">
                                </a>
                            </span>

                        </div>
                    </div>
                </div>

                <!-- CONTENT + BOOKING ROW -->
                <div class="row mt-4">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-8">
                        <h1 class="tour-title">{{ $destinationsData->title }}</h1>

                        <p class="tour-subtitle">
                            {{ $destinationsData->short_description }}
                        </p>

                        <ul class="tour-meta">
                            <li><i class="fa-regular fa-clock"></i> {{ $destinationsData->tour_duration }}</li>
                            <li><i class="fa-solid fa-users"></i> {{ $destinationsData->tour_group }}</li>
                            <li><i class="fa-solid fa-location-dot"></i> {{ $destinationsData->tour_location }}</li>
                            <li><i class="fa-solid fa-star"></i> {{ $destinationsData->tour_reviews }}</li>
                        </ul>

                        <h3 class="content-heading">Tour Overview</h3>
                        <div class="content-text two-column-list">
                            {!! $destinationsData->description !!}
                        </div>





                    </div>

                    <!-- RIGHT BOOKING BOX -->
                    <div class="col-lg-4">
                        <div class="booking-box">

                            <div class="price-box">
                                {{-- <h3>₹2,499 <span>₹2,999</span></h3>
                                <p>Per Person</p> --}}
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
                            <h3> {{ $destinationsData->title }}</h3>

                            <div class="timeline">
                                @foreach ($destinationsdetails as $kaushik)
                                    <div class="timeline-item">
                                        <span class="time">Day {{ $kaushik->order_num }}</span>
                                        <div>
                                            <h4>{{ $kaushik->name }}</h4>
                                            <p>{{ $kaushik->description }}</p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        <!-- INCLUSION TAB -->
                        <div class="tab-content" id="inclusion">
                            <div class="inc-exc-wrap">

                                <!-- INCLUSIONS -->
                                <div class="inc-box">
                                    <h4><i class="fa-solid fa-circle-check"></i> Inclusions</h4>
                                    @php
                                        $inclusions = preg_split("/\r\n|\n|\r/", $destinationsData->inclusions);
                                    @endphp
                                    <ul>
                                        @foreach ($inclusions as $item)
                                            @if (trim($item) !== '')
                                                <li>{{ trim($item) }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- EXCLUSIONS -->
                                <div class="exc-box">
                                    <h4><i class="fa-solid fa-circle-xmark"></i> Exclusions</h4>
                                       @php
                                        $exclusions = preg_split("/\r\n|\n|\r/", $destinationsData->exclusions);
                                    @endphp
                                    <ul>
                                       @foreach ($exclusions as $item)
                                            @if (trim($item) !== '')
                                                <li>{{ trim($item) }}</li>
                                            @endif
                                        @endforeach
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
                                        <strong>{{$destinationsData->tour_duration}}</strong>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <i class="fa-regular fa-calendar"></i>
                                    <div>
                                        <span>Best Time</span>
                                        <strong>{{$destinationsData->best_time}}</strong>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div>
                                        <span>Pickup Location</span>
                                        <strong>{{$destinationsData->pickup_location}}</strong>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <i class="fa-solid fa-users"></i>
                                    <div>
                                        <span>Suitable For</span>
                                        <strong>{{$destinationsData->tour_group}}</strong>
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
