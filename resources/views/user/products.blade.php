@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-css')
    <!-- External CSS -->
    <link rel="stylesheet" href="/static/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/static/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/static/assets/css/slick.css">
    <link rel="stylesheet" href="/static/assets/css/plyr.css">
    <link rel="stylesheet" href="/static/assets/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/static/css/style.css?id=1">
    <link rel="stylesheet" href="/static/css/scheme/primary.css">
    <link rel="stylesheet" href="/static/css/responsive.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CRoboto+Slab:400,700%7CPacifico" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/static/images/favicon.png">
    <link rel="apple-touch-icon" href="/static/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/images/icon-114x114.png">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
@endsection

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">All Product</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">All Product</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">

      <!-- Popular Courses -->
      <div class="elh-section elh-carousel-section">
          <div class="container elh-section-padding elh-bottom-0">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="elh-section-header text-left">
                          <h3 class="elh-section-title">Smart camera</h3>
                          <p class="elh-section-text">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                          </p>
                          <a class="all-link" href="product-category.html">See All</a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="elh-generic-carousel owl-carousel">
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Smart camera 1 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Smart camera 2 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Smart camera 3 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Smart camera 4 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Smart camera 5 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container elh-section-padding elh-bottom-0">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="elh-section-header text-left">
                          <h3 class="elh-section-title">Neuro-Linguistic Programming</h3>
                          <p class="elh-section-text">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                          </p>
                          <a class="all-link" href="product-category.html">See All</a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="elh-generic-carousel owl-carousel">
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Neuro-Linguistic Programming 1 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Neuro-Linguistic Programming 2 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Neuro-Linguistic Programming 3 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Neuro-Linguistic Programming 4 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Neuro-Linguistic Programming 5 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container elh-section-padding">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="elh-section-header text-left">
                          <h3 class="elh-section-title">Data Science Lab</h3>
                          <p class="elh-section-text">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                          </p>
                          <a class="all-link" href="product-category.html">See All</a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="elh-generic-carousel owl-carousel">
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Data Science Lab 1 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Data Science Lab 2 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Data Science Lab 3 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Data Science Lab 4 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                      <div class="elh-course style-2">
                          <a class="elh-course-thumb" href="product-single.html">
                              <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                          </a>
                          <div class="elh-course-content">
                              <h4 class="elh-course-title">
                                  <a href="product-single.html"> Data Science Lab 5 </a>
                              </h4>
                          </div>
                          <div class="elh-course-footer text-justify">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- Popular Courses End -->

        <!-- Subscription -->
        <div class="elh-section elh-theme-bg elh-subscribe-section style-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="elh-subscribe-heading">
                            <h3>Subscribe us for Future Updates</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post">
                            <input type="email" name="email" placeholder="Enter your mail here">
                            <button type="submit">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscription End -->

    </div>
@endsection

@section('user-script')
    <!-- Script -->
    <script src="/static/assets/js/jquery.min.js"></script>
    <script src="/static/assets/js/bootstrap.min.js"></script>
    <script src="/static/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/static/assets/js/visible.js"></script>
    <script src="/static/assets/js/isotope.pkgd.min.js"></script>
    <script src="/static/assets/js/owl.carousel.min.js"></script>
    <script src="/static/assets/js/slick.min.js"></script>
    <script src="/static/assets/js/plyr.js"></script>
    <script src="/static/assets/js/jquery.countTo.js"></script>
    <script src="/static/assets/js/jquery.countdown.min.js"></script>
    <script src="/static/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/static/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/static/js/custom.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5aa3a4174b401e45400d980c/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection
