<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PENAT - Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('tmp/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('tmp/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('tmp/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('tmp/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('tmp/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('tmp/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('tmp/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('tmp/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('tmp/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('tmp/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('tmp/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('tmp/css/style.css')}}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">PENAT.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="landing" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="tentang" class="nav-link">Tentang</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="portfolio.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="masuk">Masuk</a>
                <a class="dropdown-item" href="registrasi">Registrasi</a>
              </div>
          </li>
          <!-- <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Get in touch</span></a></li> -->
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Lapor Ke<strong>PENAT</strong> Anda Selamat :)</h1>
            <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="laporan" class="btn btn-primary btn-outline-white px-5 py-3">Get in touch</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <br> <br> <br> <br> <br>
    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

          <div class="col-md-3 mb-3">
            <a href="#" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Pengaduan<br><span class="tag">Laporan</span></h3>
              </div>
              <img src="{{asset('tmp/images/7.png' )}}"  width="3000  px" height="400px" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="user-img mr-3" style="background-image: url({{asset('tmp/images/7.png')}};"></div>
                  <h3><br><span class="position"></span></h3>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end">

                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>JALAN<br><span class="tag">Macet</span></h3>
                      </div>
                      <img src="{{asset('tmp/images/9.jpg')}}" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                          <h3>Irshal <br><span class="position">Masyarakat</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Zendesk<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="{{asset('tmp/images/15.png')}}" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url({{asset('tmp/images/15.png')}};"></div>
                          <h3>siera <br><span class="position">Designer</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-start">
                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Curator<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="{{asset('tmp/images/13.png')}}" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url(asset('tmp/images/13.png')}};"></div>
                          <h3>John Bruce <br><span class="position">Designer</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Tasty<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="{{asset('tmp/images/11.jpg')}}" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url({{asset('tmp/images/11.jpg')}};"></div>
                          <h3>John Bruce <br><span class="position">Designer</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <a href="#" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Voyage<br><span class="tag">Website</span></h3>
              </div>
              <img src="{{asset('tmp/images/2.png')}}" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="user-img mr-3" style="background-image: url({{asset('tmp/images/2.png')}};"></div>
                  <h3>John Bruce <br><span class="position">Designer</span></h3>
                </div>
              </div>
            </a>
          </div>

        <!-- </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="h1">UI/UX, visual, <strong class="px-3">Web designer</strong> with more than 12 years of experience in designing websites and mobile apps.</h2>
            <p><a href="#" class="btn btn-primary mt-3 py-3 px-5">Get in touch</a></p>
          </div>
        </div>
      </div> -->
    </section>
    </div>
    
  
    <section class="ftco-section">
      <div class="container" style="margin-top:-100px;">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Proses PENAT mengeksekusi Laporan</span>
            <h2 class="mb-4"> PENAT Memudahkan anda dalam menyelesaikan masalah</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus alias, mollitia, iure nobis illum, fuga facere neque similique sed commodi id consequatur exercitationem. Nobis illo provident fugit, ipsa numquam sequi.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-2 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><i class="fas fa-user fa-2x"></i></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Strategy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-2 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><i class="fas fa-user fa-2x"></i></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Design</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-2 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><i class="fas fa-user fa-2x"></i></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Design</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-2 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><i class="fas fa-user fa-2x"></i></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Development</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><i class="fas fa-user fa-2x"></i></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Help &amp; Supports</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <span class="icon icon-paper-plane"></span>
                      <input type="text" class="form-control" placeholder="Enter email address">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Works</span>
            <h2 class="mb-4">View our works below to see our design and way of development.</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url({{asset('tmp/images/work-1.jpg')}}; " data-scrollax=" properties: { translateY: '-20%'}">
            </a>
            <div class="text">
              <h4 class="subheading">Illustration</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image image-2 order-2" style="background-image: url({{asset('tmp/images/work-2.jpg')}};" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Application</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url({{asset('tmp/images/work-3.jpg')}}; " data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text">
              <h4 class="subheading">Web Design</h4>
              <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <span><a href="#" class="btn btn-primary py-3 px-5">View All Projects</a></span>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Customer Says</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('tmp/images/person_1.jpg')}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('tmp/images/person_2.jpg')}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('tmp/images/person_3.jpg')}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('tmp/images/person_1.jpg')}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('tmp/images/person_1.jpg')}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <!-- <section class="ftco-section ftco-counter" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Our achievements</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="400">0</strong>
                <span>Customers are satisfied with our professional support</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Amazing preset options to be mixed and combined</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8000">0</strong>
                <span>Average response time on live chat support channel</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('tmp/images/image_1.jpg')}};">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('tmp/images/image_2.jpg')}};">
              </a>
              <div class="text p-4">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('tmp/images/image_3.jpg')}};">
              </a>
              <div class="text p-4">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

 
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('tmp/js/jquery.min.js')}}"></script>
  <script src="{{asset('tmp/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('tmp/js/popper.min.js')}}"></script>
  <script src="{{asset('tmp/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('tmp/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('tmp/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('tmp/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('tmp/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('tmp/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('tmp/js/aos.js')}}"></script>
  <script src="{{asset('tmp/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('tmp/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('tmp/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('tmp/js/particles.min.js')}}"></script>
  <script src="{{asset('tmp/js/particle.js')}}"></script>
  <script src="{{asset('tmp/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('tmp/js/google-map.js')}}"></script>
  <script src="{{asset('tmp/js/main.js')}}"></script>
    
  </body>
</html>