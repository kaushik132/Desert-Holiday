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

@foreach ($alldestinations as $alldestination)


                    <a href="{{ 'destination/' . $alldestination->slug }}" class="item">
                        <div class="category-item text-center">
                            <img src="{{ url('uploads/' . $alldestination->image) }}" class="rounded-circle" alt="Leh-Ladakh">
                            <h6 class="category-title mt-3">{{$alldestination->name}}</h6>
                            <p class="category-subtitle">{{$alldestination->short_description}}</p>
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
                                <li data-id="" class="option">All</li>
                                @foreach ($destinationCategories as $cat)
                                    <li data-id="{{ $cat->id }}" class="option">
                                        {{ $cat->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <label class="filter-label">Duration</label>
                        <div class="custom-select" onclick="toggleSelect(this)">
                            <span class="selected-text">All</span>
                            <span class="arrow">▾</span>
                            <ul class="select-options">
                                <li data-id="" class="option">All</li>
                                @foreach ($duration as $dur)
                                    <li data-id="{{ $dur->id }}" class="option">
                                        {{ $dur->name }}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">

                    </div>

                    <div class="col-lg-3 col-md-6 col-6">

                    </div>

                    <div class="col-lg-3 col-md-6 col-12 text-lg-end">
                        <button class="btn-clear">✕ Clear all</button>
                    </div>

                </div>

                <!-- TAGS + COUNT -->
                <div class="d-flex flex-wrap align-items-center gap-2 mt-3">



                    <div class="ms-auto fw-medium">

                    </div>
                </div>

            </div>

            <div class="container">

                <div class="row">


                    @foreach ($destinationList as $destination)
                        <div class="col-lg-3 col-md-6 tour-card" data-category="{{ $destination->category_id }}"
                            data-duration="{{ $destination->duration_id }}">
                            <article>
                                <a href="{{ 'destination-detail/' . $destination->slug }}">
                                    <div class="featured-card">
                                        <div class="featured-img">
                                            <img src="{{ url('uploads/' . $destination->thumb_image) }}"
                                                alt="{{ $destination->alt }}">
                                            <div class="top-btn-icon">
                                                <div class="top-btn"><small>Top Rated</small></div>
                                                <div class="top-icon">
                                                    <img src="{{ asset('assets/images/heart.png') }}" alt="Hart Icon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="featured-content">
                                            <h3>{{ $destination->title }}</h3>

                                            <span><i class="fa-solid fa-clock"></i> {{ $destination->tour_duration }}
                                                days</span>
                                            &nbsp;&nbsp;
                                            <span><i class="fa-solid fa-location-dot"></i>
                                                {{ $destination->tour_location }}</span>

                                            <ul>
                                                {{-- <li>
                                                <span class="main-price">₹4888</span>
                                                <span>/ person</span>
                                            </li> --}}
                                                <li class="theme-btn cus-btn">Enquiry Now</li>
                                            </ul>

                                            <span class="badge">★ {{ $destination->tour_reviews }}</span>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    @endforeach






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

   <script>
let selectedCategory = '';
let selectedDuration = '';

/* Open/close dropdown */
document.querySelectorAll('.custom-select').forEach(select => {
    select.addEventListener('click', function () {
        this.classList.toggle('open');
    });
});

/* Option click */
document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function (e) {
        e.stopPropagation();

        const select = this.closest('.custom-select');
        const text = this.innerText;
        const id = this.dataset.id;

        select.querySelector('.selected-text').innerText = text;

        if (select.previousElementSibling?.innerText === 'Category') {
            selectedCategory = id;
        } else {
            selectedDuration = id;
        }

        filterTours();
        renderTags();
    });
});

/* Filter logic */
function filterTours() {
    let count = 0;

    document.querySelectorAll('.tour-card').forEach(card => {
        const cat = card.dataset.category;
        const dur = card.dataset.duration;

        let show = true;
        if (selectedCategory && cat !== selectedCategory) show = false;
        if (selectedDuration && dur !== selectedDuration) show = false;

        card.style.display = show ? 'block' : 'none';
        if (show) count++;
    });

    document.querySelector('.fw-medium').innerText =
        `Showing ${count} tour packages`;
}

/* Render filter tags dynamically */
function renderTags() {
    const tagBox = document.querySelector('.filter-tags');
    tagBox.innerHTML = '';

    if (selectedCategory) {
        const catText = document.querySelector('.custom-select[data-type="category"] .selected-text').innerText;
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `${catText} <span class="remove-tag" data-type="category">×</span>`;
        tagBox.appendChild(tag);
    }

    if (selectedDuration) {
        const durText = document.querySelector('.custom-select[data-type="duration"] .selected-text').innerText;
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `${durText} <span class="remove-tag" data-type="duration">×</span>`;
        tagBox.appendChild(tag);
    }

    // Add click event for removing a tag
    document.querySelectorAll('.remove-tag').forEach(el => {
        el.addEventListener('click', function () {
            const type = this.dataset.type;
            if (type === 'category') selectedCategory = '';
            if (type === 'duration') selectedDuration = '';

            // Reset dropdown text
            if (type === 'category') {
                document.querySelector('.custom-select[data-type="category"] .selected-text').innerText = 'All';
            }
            if (type === 'duration') {
                document.querySelector('.custom-select[data-type="duration"] .selected-text').innerText = 'All';
            }

            filterTours();
            renderTags();
        });
    });
}

/* Clear all button */
document.querySelector('.btn-clear').addEventListener('click', () => {
    selectedCategory = '';
    selectedDuration = '';

    document.querySelectorAll('.selected-text').forEach(el => el.innerText = 'All');
    document.querySelectorAll('.tour-card').forEach(c => c.style.display = 'block');

    document.querySelector('.fw-medium').innerText =
        `Showing ${document.querySelectorAll('.tour-card').length} tour packages`;

    document.querySelector('.filter-tags').innerHTML = '';
});
</script>
@endsection
