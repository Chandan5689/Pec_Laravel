@extends('frontEnd.layouts.master')

@section('title')
    BlogPage
@endsection
@section('pageheaderTitle')
    Blog
@endsection
@section('contents')
       @include('frontEnd.layouts.pageheader')
        <!-- Blog Start -->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="{{ $blog->image }}" alt="eduact">
                                <a href="blog-details-right.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-right.html">{{ $blog->department }}</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">{{ $blog->date }}</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-right.html">{{ $blog->blog_title }}</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="{{ $blog->author_image }}" alt="eduact" />
                                        <a href="blog-list-right.html">{{ $blog->author_name }}</a>
                                        {{ $blog->author_position }}
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-right.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    @endforeach
                   
                    {{-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-2.jpg" alt="eduact">
                                <a href="blog-details.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details.html">Introducing the Latest tech Features in your Business</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-3.jpg" alt="eduact">
                                <a href="blog-details-left.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-left.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-left.html">Basic Rules of Running Web Agency business Solution</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-left.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-left.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-4.jpg" alt="eduact">
                                <a href="blog-details-right.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-right.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-right.html">Get a Few Solutions to Hire a Best right Candidate</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-right.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-right.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-5.jpg" alt="eduact">
                                <a href="blog-details.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details.html">When an Unknown Printer took a Galley of Type</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-6.jpg" alt="eduact">
                                <a href="blog-details-left.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-left.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-left.html">The Generated Orem Ipsum is There fore Always</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-left.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-left.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="blog-page__pagination clearfix">
                            <li><a href="blog-list-left.html" class="active">1</a></li>
                            <li><a href="blog-list-right.html">2</a></li>
                            <li class="next"><a href="blog-list.html"><span class="icon-caret-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
@endsection


   
