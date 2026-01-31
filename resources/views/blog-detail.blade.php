@extends('dashboard.layout.main')
@section('content')
    <main>

        <section class="blog-detail-section py-4">
            <div class="container">
                <div class="row g-4">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-8">

                        <a href="{{ url('blog') }}" class="back-btn">
                            <i class="fa-solid fa-arrow-left"></i> Back To Home
                        </a>

                        <h1 class="blog-title">
                            {{ $blogDetail->title }}
                        </h1>

                        <div class="blog-meta mb-3">

                            <span><i class="fa-regular fa-calendar"></i>
                                {{ $blogDetail->created_at->format('d F, Y') }}</span>



                        </div>

                        <div class="blog-featured-img">
                            <img src="{{ url('uploads/' . $blogDetail->image) }}" alt="">
                        </div>

                        <div class="blog-content mt-4">
                            <p>
                                {!! $blogDetail->description !!}
                            </p>




                        </div>

                    </div>

                    <!-- RIGHT SIDEBAR -->
                    <div class="col-lg-4">

                        <!-- RECENT POSTS -->
                        <div class="sidebar-box">
                            <h5 class="sidebar-title">Recent Blog</h5>


                            @foreach ($blogrendom as $rendom)
                                <div class="recent-post-item d-flex align-items-start">


                                    <div class="recent-post-content">
                                        <a href="{{ 'blog-detail/' . $rendom->slug }}">

                                        <span class="tag gadget">{{ $rendom->category->name }}</span>
                                        <h6>
                                            {{ $rendom->title }}
                                        </h6>
                                        <span class="date">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $rendom->created_at->format('d F, Y') }}
                                        </span>
                                        </a>
                                    </div>

                                    <div class="recent-post-img">
                                        <a href="{{ 'blog-detail/' . $rendom->slug }}">
                                        <img src="{{ url('uploads/' . $rendom->image) }}" alt="{{ $rendom->alt }}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <!-- SUBSCRIBE -->
                        <div class="sidebar-box mt-4 subscribe-box">
                            <h5 class="sidebar-title">Subscribe & Followers</h5>

                            <div class="subscribe-social-list">
                                @if (!empty($blogDetail->facebook_link))
                                    <a href="{{ $blogDetail->facebook_link }}" target="_blank"
                                        class="subscribe-social-item">
                                        <i class="fa-brands fa-facebook-f"></i> Facebook
                                    </a>
                                @endif

                                @if (!empty($blogDetail->twitter_link))
                                    <a href="{{ $blogDetail->twitter_link }}" target="_blank"
                                        class="subscribe-social-item">
                                        <i class="fa-brands fa-twitter"></i> Twitter
                                    </a>
                                @endif

                                @if (!empty($blogDetail->instagram_link))
                                    <a href="{{ $blogDetail->instagram_link }}" target="_blank"
                                        class="subscribe-social-item">
                                        <i class="fa-brands fa-instagram"></i> Instagram
                                    </a>
                                @endif

                                @if (!empty($blogDetail->youtube_link))
                                    <a href="{{ $blogDetail->youtube_link }}" target="_blank"
                                        class="subscribe-social-item">
                                        <i class="fa-brands fa-youtube"></i> Youtube
                                    </a>
                                @endif


                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>



    </main>
@endsection
