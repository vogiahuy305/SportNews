<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!-- Title -->
      <title>SportNews - Báo thể thao của VGH</title>
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('user/assets/img/core-img/favicon.ico') }}">
      <!-- Stylesheet -->
      <link rel="stylesheet" href="{{ asset('/user/assets/style.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
      <!-- Preloader -->
      <div class="preloader d-flex align-items-center justify-content-center">
         <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div>
      </div>
      <!-- ##### Header Area Start ##### -->
      <header class="header-area">
         <!-- Navbar Area -->
         <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
               <div class="container-fluid">
                  <!-- Menu -->
                  <nav class="classy-navbar justify-content-between" id="newsboxNav">
                     <!-- Nav brand -->
                     <a href="{{ route('homepage') }}" class="nav-brand"><img src="{{ asset('/user/assets/img/core-img/logo.png') }}" alt=""></a>
                     <!-- Navbar Toggler -->
                     <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                     </div>
                     <!-- Menu -->
                     <div class="classy-menu">
                        <!-- Close Button -->
                        <div class="classycloseIcon">
                           <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('homepage') }}">Trang Chủ</a></li>
                                <li>
                                    <a href="#">Danh mục</a>
                                    <ul class="dropdown">
                                        @foreach($category as $key => $cate)
                                            <li>
                                                <a title="{{ $cate->title }}" href="{{ route('category',$cate->slug) }}">{{ $cate->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    </li>
                                <li>
                                    <a href="#">Thể thao</a>
                                    <ul class="dropdown">
                                        @foreach($sport as $key => $spt)
                                            <li>
                                                <a title="{{ $spt->title }}" href="{{ route('sport', $spt->slug) }}">{{ $spt->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Quốc gia</a>
                                    <ul class="dropdown">
                                    @foreach($genre as $key => $gen)
                                        <li><a title="{{ $gen->title }}" href="{{ route('genre', $gen->slug) }}">{{ $gen->title }}</a></li>
                                    @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Đăng nhập</span>
                                        <img src="{{ asset('/user/assets/img/bg-img/avatar.jpg') }}" width="50px" height="50px"  alt="">
                                        </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- ##### Header Area End ##### -->
      <!-- ##### Breaking News Area Start ##### -->
      <section class="breaking-news-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <!-- Breaking News Widget -->
                  <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                     <div class="title">
                        <h6>Tin nổi bật</h6>
                     </div>
                     <div id="breakingNewsTicker" class="ticker">
                        <ul>
                           <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</a></li>
                           <li><a href="#">Welcome to Colorlib Family.</a></li>
                           <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Breaking News Area End ##### -->

      @yield('content')
      <!-- ##### Hero Area Start ##### -->

      <!-- ##### Intro News Area End ##### -->

      <!-- ##### Footer Area Start ##### -->
      <footer class="footer-area">
         <!-- Footer Logo -->
         <div class="footer-logo mb-100">
            <a href="{{ route('homepage') }}"><img src="{{ asset('/user/assets/img/core-img/logo.png') }}" alt=""></a>
         </div>
         <!-- Footer Content -->
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="footer-content text-center">
                     <!-- Footer Nav -->
                     <div class="footer-nav">
                        <ul>
                           <li><a href="#">Contact Us</a></li>
                           <li><a href="#">Closed Captioning</a></li>
                           <li><a href="#">Site Map</a></li>
                        </ul>
                     </div>
                     <!-- Social Info -->
                     <div class="footer-social-info">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     </div>
                     <p class="mb-15">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>
                     <!-- Copywrite Text -->
                     <p class="copywrite-text">
                        <a href="#">
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- ##### Footer Area Start ##### -->
      <!-- ##### All Javascript Script ##### -->
      <!-- jQuery-2.2.4 js -->
      <script src="{{ asset('/user/assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
      <!-- Popper js -->
      <script src="{{ asset('/user/assets/js/bootstrap/popper.min.js') }}"></script>
      <!-- Bootstrap js -->
      <script src="{{ asset('/user/assets/js/bootstrap/bootstrap.min.js') }}"></script>
      <!-- All Plugins js -->
      <script src="{{ asset('/user/assets/js/plugins/plugins.js') }}"></script>
      <!-- Active js -->
      <script src="{{ asset('/user/assets/js/active.js') }}"></script>
   </body>
</html>