@extends('dashboard.layout.main')
@section('content')
<main>

  <section class="breadcrumb-section">
    <div class="breadcrumb-overlay"></div>

    <div class="container">
      <div class="breadcrumb-content text-center">
        <h1>Kashmir Valleys</h1>
        <ul class="breadcrumb-list">
          <li><a href="#">Home</a></li>
          <li>/</li>
          <li>Tour Details</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="category position-relative">
    <div class="container">
      <h2 class="section-title text-center">Explore Top Destinations in India</h2>
      <p class="section-subtitle text-center mb-4">Navigate the Globe with Confidence</p>

      <!-- Owl Carousel Wrapper -->
      <div class="owl-carousel category-carousel">


        <a href="#!">
          <div class="category-item text-center">
            <img src="assets/images/banner-2 (2).jpg" class="rounded-circle" alt="Leh-Ladakh">
            <h6 class="category-title mt-3">Leh-Ladakh</h6>
            <p class="category-subtitle">Mountain Adventures</p>
          </div>

        </a>
        <a href="#!">
          <div class="category-item text-center">
            <img src="assets/images/banner-2 (2).jpg" class="rounded-circle" alt="Leh-Ladakh">
            <h6 class="category-title mt-3">Leh-Ladakh</h6>
            <p class="category-subtitle">Mountain Adventures</p>
          </div>

        </a>
        <a href="#!">
          <div class="category-item text-center">
            <img src="assets/images/banner-2 (2).jpg" class="rounded-circle" alt="Leh-Ladakh">
            <h6 class="category-title mt-3">Leh-Ladakh</h6>
            <p class="category-subtitle">Mountain Adventures</p>
          </div>

        </a>
        <a href="#!">
          <div class="category-item text-center">
            <img src="assets/images/banner-2 (2).jpg" class="rounded-circle" alt="Leh-Ladakh">
            <h6 class="category-title mt-3">Leh-Ladakh</h6>
            <p class="category-subtitle">Mountain Adventures</p>
          </div>

        </a>
        <a href="#!">
          <div class="category-item text-center">
            <img src="assets/images/banner-2 (2).jpg" class="rounded-circle" alt="Leh-Ladakh">
            <h6 class="category-title mt-3">Leh-Ladakh</h6>
            <p class="category-subtitle">Mountain Adventures</p>
          </div>

        </a>

      </div>

      <!-- Custom Arrows -->


    </div>
    <div class="custom-arrows">
      <button class="arrow-prev-cate"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="arrow-next-cate"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </section>

  <section class="featured">

    <div class="container my-4">

      <!-- FILTER ROW -->
      <div class="row g-3 align-items-end">

        <div class="col-lg-2 col-md-4 col-6">
          <label class="filter-label">Category</label>
          <div class="custom-select" onclick="toggleSelect(this)">
            <span class="selected-text">All</span>
            <span class="arrow">▾</span>
            <ul class="select-options">
              <li onclick="selectOption(this)">All</li>
              <li onclick="selectOption(this)">Adventure</li>
              <li onclick="selectOption(this)">Family</li>
              <li onclick="selectOption(this)">Couple</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <label class="filter-label">Duration</label>
          <div class="custom-select" onclick="toggleSelect(this)">
            <span class="selected-text">All</span>
            <span class="arrow">▾</span>
            <ul class="select-options">
              <li onclick="selectOption(this)">All</li>
              <li onclick="selectOption(this)">1-5 Days</li>
              <li onclick="selectOption(this)">6-10 Days</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <label class="filter-label">Budget</label>
          <div class="custom-select" onclick="toggleSelect(this)">
            <span class="selected-text">All</span>
            <span class="arrow">▾</span>
            <ul class="select-options">
              <li onclick="selectOption(this)">All</li>
              <li onclick="selectOption(this)">Under 20k</li>
              <li onclick="selectOption(this)">20k - 50k</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <label class="filter-label">Sort By</label>
          <div class="custom-select" onclick="toggleSelect(this)">
            <span class="selected-text">Featured First</span>
            <span class="arrow">▾</span>
            <ul class="select-options">
              <li onclick="selectOption(this)">Featured First</li>
              <li onclick="selectOption(this)">Price Low to High</li>
              <li onclick="selectOption(this)">Price High to Low</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12 text-lg-end">
          <button class="btn-clear">✕ Clear all</button>
        </div>

      </div>

      <!-- TAGS + COUNT -->
      <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
        <span class="filter-tag">1-5 Days <span>×</span></span>
        <span class="filter-tag">Under 20k <span>×</span></span>
        <span class="filter-tag">High to Low <span>×</span></span>

        <div class="ms-auto fw-medium">
          Showing 6 tour packages
        </div>
      </div>

    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
        <div class="col-lg-3 col-md-6">
          <article>
            <a href="{{'destination-detail'}}">
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
