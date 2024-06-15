<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/images/favicon.png')}}" rel="icon">
  <link href="{{asset('/images/apple-touch-icon.png')}}" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <!-- Logout Button -->
        <div class="logout-btn d-none d-md-flex align-items-center ms-4">
          <button onclick="logout()" class="btn btn-danger btn-sm">Logout</button>
        </div>
  

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Restaurantly</span></h1>
          <h2>Hai, {{ Auth::user()->name }} selamat datang di <span>Restaurantly</span></h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Tentang Kami Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-img">
          <img src="{{asset('/images/about.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3>Memberikan Layanan Terbaik dengan Keahlian dan Pengalaman.</h3>
        <p class="fst-italic">
          Kami berdedikasi untuk memberikan pelayanan terbaik dengan integritas dan profesionalisme.
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i> Kami bekerja dengan penuh tanggung jawab untuk kepuasan pelanggan.</li>
          <li><i class="bi bi-check-circle"></i> Mengutamakan kejujuran dan transparansi dalam setiap layanan yang kami berikan.</li>
          <li><i class="bi bi-check-circle"></i> Menyediakan solusi yang efektif dan efisien untuk setiap kebutuhan pelanggan.</li>
        </ul>
        <p>
          Kami berkomitmen untuk memberikan layanan berkualitas tinggi dengan pendekatan yang berpusat pada pelanggan. Dengan keahlian dan pengalaman kami, kami siap membantu Anda mencapai tujuan Anda dengan cara yang paling efektif dan efisien.
        </p>
      </div>
    </div>

  </div>
</section><!-- End Tentang Kami Section -->


   <!-- ======= Mengapa Kami Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Mengapa Kami</h2>
      <p>Mengapa Memilih Restoran Kami</p>
    </div>

    <div class="row">

      <div class="col-lg-4">
        <div class="box" data-aos="zoom-in" data-aos-delay="100">
          <span>01</span>
          <h4>Pelayanan Terbaik</h4>
          <p>Kami menyediakan pelayanan terbaik dengan memperhatikan setiap detail kebutuhan pelanggan.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="zoom-in" data-aos-delay="200">
          <span>02</span>
          <h4>Makanan Berkualitas</h4>
          <p>Kami menggunakan bahan-bahan berkualitas tinggi untuk setiap hidangan yang kami sajikan.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="zoom-in" data-aos-delay="300">
          <span>03</span>
          <h4>Lingkungan Nyaman</h4>
          <p>Kami menawarkan suasana yang nyaman dan bersih, cocok untuk bersantap bersama keluarga dan teman.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Mengapa Kami Section -->


   <!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Menu</h2>
      <p>Periksa Menu Lezat Kami</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-starters">Pembuka</li>
          <li data-filter=".filter-salads">Salad</li>
          <li data-filter=".filter-specialty">Spesial</li>
        </ul>
      </div>
    </div>

    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-6 menu-item filter-starters">
        <img src="{{asset('/images/menu/lobster-bisque.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Bisque Lobster</a><span>Rp 85.000</span>
        </div>
        <div class="menu-ingredients">
          Lobster, krim, bumbu rahasia
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-specialty">
        <img src="{{asset('/images/menu/bread-barrel.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Keranjang Roti</a><span>Rp 70.000</span>
        </div>
        <div class="menu-ingredients">
          Berbagai macam roti segar
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="{{asset('/images/menu/cake.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kue Kepiting</a><span>Rp 95.000</span>
        </div>
        <div class="menu-ingredients">
          Kue kepiting yang lembut disajikan dengan roti panggang dan saus tartar
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="{{asset('/images/menu/caesar.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Pilihan Caesar</a><span>Rp 100.000</span>
        </div>
        <div class="menu-ingredients">
          Selada romaine, crouton, dan keju parmesan
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-specialty">
        <img src="{{asset('/images/menu/tuscan-grilled.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Tuscan Grilled</a><span>Rp 120.000</span>
        </div>
        <div class="menu-ingredients">
          Ayam panggang dengan provolone, artichoke, dan pesto merah panggang
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="{{asset('/images/menu/mozzarella.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Stik Mozzarella</a><span>Rp 65.000</span>
        </div>
        <div class="menu-ingredients">
          Stik keju mozzarella yang renyah
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="{{asset('/images/menu/greek-salad.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Salad Yunani</a><span>Rp 120.000</span>
        </div>
        <div class="menu-ingredients">
          Bayam segar, selada romaine, tomat, dan zaitun Yunani
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="{{asset('/images/menu/spinach-salad.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Salad Bayam</a><span>Rp 120.000</span>
        </div>
        <div class="menu-ingredients">
          Bayam segar dengan jamur, telur rebus, dan vinaigrette bacon hangat
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-specialty">
        <img src="{{asset('/images/menu/lobster-roll.jpg')}}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Lobster Roll</a><span>Rp 150.000</span>
        </div>
        <div class="menu-ingredients">
          Daging lobster yang montok, mayones dan selada segar di atas roti panggang
        </div>
      </div>

    </div>

  </div>
</section><!-- End Menu Section -->


    <!-- ======= Specials Section ======= -->
<section id="specials" class="specials">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Spesial</h2>
      <p>Periksa Spesial Kami</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Arsitektur yang terbuka namun tersembunyi</h3>
                <p class="fst-italic">Yang menguntungkan memperbaiki keterlibatan yang dilayani oleh sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <p>Dan bagi kita yang lebih tua. Nikmati kesenangan yang indah dan harum. Melayani diri sendiri yang lebih besar yang menjadi miliknya. Pelajari lebih lanjut bagaimana menghadapi berbagai rintangan. Est memberikan sedikit dampak pada semua yang dibutuhkan.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{asset('/images/specials-1.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Dan yang tidak biasa untuk diakui</h3>
                <p class="fst-italic">Yang menguntungkan memperbaiki keterlibatan yang dilayani oleh sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <p>Sangatlah penting untuk mengenali kesalahan. Semua ini tidak menolak hukum yang benar. Hal yang sama tidak dapat dihindari oleh Anda dan saya. Tidak ada yang dapat ditolak yang memungkinkan pertanyaan mendalam terhadap penekanan ini.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{asset('/images/specials-2.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Memperbaiki secara mudah tanpa benci tetapi menerima</h3>
                <p class="fst-italic">Voluptatibus itu. Benci kemiripan ini yang ditunjukkan bukan pelarian. Mereka yang lahir bukan hanya kata-kata yang menyakitkan. Pada yang kasar dan sangat penting untuk dicapai.</p>
                <p>Hak melayani dirinya sendiri. Yang diikuti oleh itu yang dikotori dan kesalahan yang meragukan. Jangan memerlukan kebijaksanaan yang diperlukan untuk dia. Pelayanan untuk kelengkapan yang diutamakan yang diisi dengan pekerjaan yang membenci. Larutan itu berbahaya.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{asset('/images/specials-3.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Melarikan diri dari rasa sakit penciptaan kerja yang terlalu banyak</h3>
                <p class="fst-italic">Membuka berbagai keluhan. Menjaga konsekuensi yang layak sebagai kesenangan diri yang tidak memungkinkan kesenangan.</p>
                <p>Manfaatkan kebebasan yang dijamin untuk menikmati kebebasan. Dibutuhkan oleh kita yang membutuhkan hal ini. Yang terbaik menghindari kesalahan pada tubuh yang memiliki dampak pada Anda. Memilih yang dapat ditemukan yang benar-benar diizinkan oleh hukum.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{asset('/images/specials-4.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Est ada bahkan ipsam yang berkendara dengan cepat menyatakan sambungan kabel</h3>
                <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                <p>Latihan kita semua. Uang yang membenci keputusasaan. Semua yang menolak untuk meminimalkan semua yang dia miliki. Uang yang membenci kesalahan yang membenci semua. Yang ditemukan pada mereka yang menyukai kehidupan di semua bagian yang salah yang diinginkan.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{asset('/images/specials-5.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Specials Section -->


 <!-- ======= Bagian Acara ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Acara</h2>
      <p>Organisasikan Acara Anda di Restoran Kami</p>
    </div>

    <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{asset('/images/event-birthday.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Ulang Tahun</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="fst-italic">
                Dirancang untuk menyenangkan dan memenuhi kebutuhan Anda.
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Disesuaikan dengan preferensi dan kebutuhan Anda.</li>
                <li><i class="bi bi-check-circled"></i> Menyediakan hidangan spesial yang lezat dan bervariasi.</li>
                <li><i class="bi bi-check-circled"></i> Dilaksanakan dengan keceriaan dan perhatian penuh.</li>
              </ul>
              <p>
                Memberikan pengalaman ulang tahun yang menyenangkan dan berkesan bagi Anda dan tamu-tamu spesial Anda.
              </p>
            </div>
          </div>
        </div><!-- End item acara -->

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{asset('/images/event-private.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Pesta Pribadi</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="fst-italic">
                Dirancang untuk memberikan privasi dan kenyamanan yang penuh.
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Dilengkapi dengan berbagai layanan tambahan yang memuaskan.</li>
                <li><i class="bi bi-check-circled"></i> Menyajikan hidangan istimewa yang memikat selera.</li>
                <li><i class="bi bi-check-circled"></i> Disesuaikan dengan kebutuhan dan preferensi Anda.</li>
              </ul>
              <p>
                Memberikan pengalaman pesta pribadi yang eksklusif dan tak terlupakan bagi Anda dan tamu-tamu Anda.
              </p>
            </div>
          </div>
        </div><!-- End item acara -->

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{asset('/images/event-custom.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Pesta Kustom</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="fst-italic">
                Dirancang untuk mengakomodasi kebutuhan dan preferensi Anda.
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Disesuaikan dengan tema dan gaya acara Anda.</li>
                <li><i class="bi bi-check-circled"></i> Menyediakan pilihan hidangan yang sesuai dengan selera.</li>
                <li><i class="bi bi-check-circled"></i> Dilaksanakan dengan perhatian penuh terhadap detail.</li>
              </ul>
              <p>
                Menyediakan pengalaman pesta yang khusus dan unik sesuai dengan keinginan Anda.
              </p>
            </div>
          </div>
        </div><!-- End item acara -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Events Section -->



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

   <!-- ======= Bagian Testimonials ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Testimoni</h2>
      <p>Apa yang mereka katakan tentang kami</p>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/images/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Pendiri</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/images/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Desainer</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/images/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Pemilik Toko</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/images/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Pekerja Freelance</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/images/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->


   <!-- ======= Bagian Galeri ======= -->
<section id="gallery" class="gallery">

  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Galeri</h2>
      <p>Beberapa foto dari Restoran Kami</p>
    </div>
  </div>

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-1.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-4.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-5.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-6.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-7.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{asset('/images/gallery/gallery-8.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
            <img src="{{asset('/images/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Gallery Section -->

    <!-- ======= Bagian Koki ======= -->
<section id="chefs" class="chefs">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Koki</h2>
      <p>Koki Profesional Kami</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <img src="{{asset('/images/chefs/chefs-1.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Walter White</h4>
              <span>Koki Master</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('/images/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Sarah Jhonson</h4>
              <span>Patissier</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="300">
          <img src="{{asset('/images/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>William Anderson</h4>
              <span>Koki</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Chefs Section -->


    <!-- ======= Bagian Kontak ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Kontak</h2>
      <p>Hubungi Kami</p>
    </div>
  </div>

  <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container" data-aos="fade-up">

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Alamat:</h4>
            <p>A108 Jalan Adam, New York, NY 535022</p>
          </div>

          <div class="open-hours">
            <i class="bi bi-clock"></i>
            <h4>Jam Operasional:</h4>
            <p>
              Senin-Sabtu:<br>
              11:00 - 23:00 WIB
            </p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@contoh.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telepon:</h4>
            <p>+1 5589 55488 55</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="8" placeholder="Pesan Anda" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Memuat</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim Pesan</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>Restaurantly</h3>
            <p>
              A108 Jalan Adam <br>
              NY 535022, Amerika Serikat<br><br>
              <strong>Telepon:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@contoh.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Tautan Berguna</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat Layanan</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Desain Web</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Pengembangan Web</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Manajemen Produk</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Pemasaran</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Desain Grafis</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Newsletter Kami</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Berlangganan">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Hak Cipta <strong><span>Restaurantly</span></strong>. Seluruh Hak Dilindungi Undang-Undang
    </div>
  </div>
</footer>

      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
<script>
  function logout() {
    // Add your logout logic here
    alert('Logging out...');
    // For example, redirect to a logout URL
    window.location.href = '/';
  }
</script>

<!-- Template Main JS File -->
<script src="{{ asset('/js/main.js') }}"></script>


</body>

</html>