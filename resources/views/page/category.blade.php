@extends('index')
@section('content')
<section class="intro-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Trang chủ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $cate_slug->title }}</li>
                </ol>
              </nav>
        </div>
        <br>
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-12">
                <div class="intro-news-tab">
                    {{--  <!-- Intro News Filter -->
                    <div class="intro-news-filter d-flex justify-content-between">
                        <h6>All the news</h6>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Popular</a>
                                <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">International</a>
                                <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Local</a>
                            </div>
                        </nav>
                    </div>  --}}

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <div class="row">
                                @foreach($post as $key => $post)
                                <!-- Single News Area -->
                                <div class="col-12 col-lg-12">
                                    <div class="single-blog-post style-2 mb-5">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img src="{{ $post->img }}" alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">{{ $post->date }}</span>
                                            <a href="#" class="post-title">{{ $post->title }}</a>
                                            <p>{{ $post->description }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single News Area -->
                                <div class="col-12 col-sm-4">
                                    <div class="single-blog-post style-2 mb-5">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img src="{{ $post->img }}" alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">{{ $post->date }}</span>
                                            <a href="#" class="post-title">{{ $post->title }}</a>
                                            <p>{{ $post->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-9">

                    <!-- Single News Area -->
                    <div class="single-blog-post d-flex flex-wrap style-5 mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/28.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus.</p>
                        </div>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-blog-post d-flex flex-wrap style-5 mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/29.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Romantic retreats: 11 resorts worth crossing the Pacific for</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                            <p>Lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis.</p>
                        </div>
                    </div>

                    <!-- Single News Area -->
                    <div class="single-blog-post d-flex flex-wrap style-5 mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/30.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Europe will hit US products with tariffs starting Friday</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                            <p>Lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis.</p>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-4 col-lg-3">

                    <!-- Banner Area -->
                    <div class="single-blog-post style-6 mb-30">
                        <!-- Banner -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/banner.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
