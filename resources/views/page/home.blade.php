@extends('index')
@section('content')
<div class="row justify-content-center">
    <!-- Intro News Tabs Area -->
    <div class="col-12 col-lg-12">
       <div class="intro-news-tab">
          <!-- Intro News Filter -->
          <div class="intro-news-filter d-flex justify-content-between">
             <h6>Tin tức hằng ngày</h6>
             <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                   <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Việt Nam</a>
                   <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Quốc tế</a>
                </div>
             </nav>
          </div>
          <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                <div class="row">
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post style-2 mb-5">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href=""><img src="{{ asset('/user/assets/img/bg-img/14.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                            <a href="" class="post-author">By Michael Smith</a>
                         </div>
                      </div>
                   </div>
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
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
                   </div>
                   @foreach ($category as $key => $cate)
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/16.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                         </div>
                      </div>
                   </div>
                   @endforeach

                   {{--  <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/17.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                         </div>
                      </div>
                   </div>
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/18.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                         </div>
                      </div>
                   </div>
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/19.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                         </div>
                      </div>
                   </div>
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/20.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                         </div>
                      </div>
                   </div>
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/21.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                         </div>
                      </div>
                   </div>  --}}
                </div>
             </div>
             <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                <div class="row">
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post style-2 mb-5">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/4.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                         </div>
                      </div>
                   </div>
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post style-2 mb-5">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/5.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                         </div>
                      </div>
                   </div>
                   @foreach ($category as $key => $cate)
                   <!-- Single News Area -->
                   <div class="col-12 col-sm-6">
                      <div class="single-blog-post d-flex style-4 mb-30">
                         <!-- Blog Thumbnail -->
                         <div class="blog-thumbnail">
                            <a href="#"><img src="{{ asset('/user/assets/img/bg-img/16.jpg') }}" alt=""></a>
                         </div>
                         <!-- Blog Content -->
                         <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
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

@foreach($category_home as $key => $cate_home)
    <a href="" class="category" title="Việt Nam">
        {{ $cate_home->title }}
     </a>
     <div class="posts">
        <div class="row">
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="single-blog-post style-2 mb-5">
                  <!-- Blog Thumbnail -->
                  <div class="blog-thumbnail">
                     <a href="#"><img src="{{ asset('/user/assets/img/bg-img/7.jpg') }}" alt=""></a>
                  </div>
                  <!-- Blog Content -->
                  <div class="blog-content">
                     <span class="post-date">June 20, 2018</span>
                     <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                     <a href="#" class="post-author">By Michael Smith</a>
                  </div>
               </div>
            </div>
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="single-blog-post style-2 mb-5">
                  <!-- Blog Thumbnail -->
                  <div class="blog-thumbnail">
                     <a href="#"><img src="{{ asset('/user/assets/img/bg-img/8.jpg') }}" alt=""></a>
                  </div>
                  <!-- Blog Content -->
                  <div class="blog-content">
                     <span class="post-date">June 20, 2018</span>
                     <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis </a>
                     <a href="#" class="post-author">By Michael Smith</a>
                  </div>
               </div>
            </div>
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
               <div class="single-blog-post style-2 mb-5">
                  <!-- Blog Thumbnail -->
                  <div class="blog-thumbnail">
                     <a href="#"><img src="{{ asset('/user/assets/img/bg-img/9.jpg') }}" alt=""></a>
                  </div>
                  <!-- Blog Content -->
                  <div class="blog-content">
                     <span class="post-date">June 20, 2018</span>
                     <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                     <a href="#" class="post-author">By Michael Smith</a>
                  </div>
               </div>
            </div>
       </div>
       <div class="row">
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/4.jpg') }}" alt=""></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                        <a href="#" class="post-author">By Michael Smith</a>
                    </div>
                </div>
            </div>
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                    <a href="#"><img src="{{ asset('/user/assets/img/bg-img/5.jpg') }}" alt=""></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                    <span class="post-date">June 20, 2018</span>
                    <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis </a>
                    <a href="#" class="post-author">By Michael Smith</a>
                    </div>
                </div>
            </div>
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                    <a href="#"><img src="{{ asset('/user/assets/img/bg-img/6.jpg') }}" alt=""></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                    <span class="post-date">June 20, 2018</span>
                    <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                    <a href="#" class="post-author">By Michael Smith</a>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endforeach

 <div class="video-slideshow py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <!-- Video Slides -->
               <div class="video-slides owl-carousel">
                  <!-- Single News Area -->
                  <div class="single-blog-post style-3">
                     <!-- Blog Thumbnail -->
                     <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/11.jpg') }}" alt=""></a>
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                     </div>
                     <!-- Blog Content -->
                     <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <p class="post-title">Elon Musk: Tesla worker admitted to sabotage</p>
                        <a href="#" class="post-author">By Michael Smith</a>
                     </div>
                  </div>
                  <!-- Single News Area -->
                  <div class="single-blog-post style-3">
                     <!-- Blog Thumbnail -->
                     <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/12.jpg') }}" alt=""></a>
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                     </div>
                     <!-- Blog Content -->
                     <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <p class="post-title">Rachel Sm ith breaks down while discussing border crisis </p>
                        <a href="#" class="post-author">By Michael Smith</a>
                     </div>
                  </div>
                  <!-- Single News Area -->
                  <div class="single-blog-post style-3">
                     <!-- Blog Thumbnail -->
                     <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/13.jpg') }}" alt=""></a>
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                     </div>
                     <!-- Blog Content -->
                     <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <p class="post-title">Dow falls 287 points as trade war fears escalate</p>
                        <a href="#" class="post-author">By Michael Smith</a>
                     </div>
                  </div>
                  <!-- Single News Area -->
                  <div class="single-blog-post style-3">
                     <!-- Blog Thumbnail -->
                     <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/11.jpg') }}" alt=""></a>
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                     </div>
                     <!-- Blog Content -->
                     <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <p class="post-title">Elon Musk: Tesla worker admitted to sabotage</p>
                        <a href="#" class="post-author">By Michael Smith</a>
                     </div>
                  </div>
                  <!-- Single News Area -->
                  <div class="single-blog-post style-3">
                     <!-- Blog Thumbnail -->
                     <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/12.jpg') }}" alt=""></a>
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                     </div>
                     <!-- Blog Content -->
                     <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <p class="post-title">Rachel Sm ith breaks down while discussing border crisis </p>
                        <a href="#" class="post-author">By Michael Smith</a>
                     </div>
                  </div>
                  <!-- Single News Area -->
                  <div class="single-blog-post style-3">
                     <!-- Blog Thumbnail -->
                     <div class="blog-thumbnail">
                        <a href="#"><img src="{{ asset('/user/assets/img/bg-img/13.jpg') }}" alt=""></a>
                        <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                     </div>
                     <!-- Blog Content -->
                     <div class="blog-content">
                        <span class="post-date">June 20, 2018</span>
                        <p class="post-title">Dow falls 287 points as trade war fears escalate</p>
                        <a href="#" class="post-author">By Michael Smith</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
 </div>
@endsection
