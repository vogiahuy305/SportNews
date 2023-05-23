@extends('index')
@section('content')
<section class="post-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="post-details-content mb-100">
                    <h1><b>{{ $post->title }}</b></h1>
                    <br>
                    <p>{{ $post->date }}</p>
                    <h5><b><i>{{  $post->description  }}</i></b></h5>
                    <br>
                    <img src="{{ $post->image }}">
                    <br><br>
                    <p>{{ $post->content }}</p>
                    <br><br>
                    <p></p>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">
                    <!-- Latest News Widget -->
                    <div class="single-widget-area news-widget mb-30">
                        <h4>Tin mới</h4>
                        @foreach($hot_news->take(8) as $key => $post)
                        <!-- Single News Area -->
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="{{ $post->image }}" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">{{ $post->date }}</span>
                                <a href="#" class="post-title">{{ $post->title }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{--  <!-- Single Widget Area -->
                    <div class="single-widget-area">

                        <!-- Single News Area -->
                        <div class="single-blog-post style-2 mb-5">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="{{ asset('/user/assets/img/bg-img/14.jpg') }}" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                <a href="#" class="post-author">By Michael Smith</a>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-blog-post style-2 mb-5">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="#"><img src="{{ asset('/user/assets/img/bg-img/15.jpg') }}" alt=""></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">June 20, 2018</span>
                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                <a href="#" class="post-author">By Michael Smith</a>
                            </div>
                        </div>
                    </div>  --}}

                </div>
            </div>
        </div>
    </div>
</section>
@endsection


