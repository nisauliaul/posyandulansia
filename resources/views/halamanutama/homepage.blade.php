<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('bootstrap/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  @include('halamanutama.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Selamat Datang Di Posyandu Lansia Bugar</h1>
      <h2>Sistem Informasi Catatan Kesehatan Lansia Untuk Menjaga Kesehatan Hidup Lansia</h2>
      <a href="#about" class="btn-get-started scrollto">Baca Selengkapnya</a>
    </div>
  </section><!-- End Hero -->

  <main id="main"> 

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset('bootstrap/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Tentang Kami</h3>
            <style>  
              p.a { 
                word-spacing: 5px;
              }
            </style>
              <p class="a">
              DiLan (Diary Lansia) merupakan sistem informasi diary atau catatan kesehatan lansia berbasis website. <br>
              DiLan bertujuan untuk memudahkan lansia dalam checkup kesehatan secara rutin setiap bulannya di posyandu lansia karena sudah menggunakan sistem.
              Pengisian data DiLan pada website dapat diisi sendiri oleh lansia atau diwakilkan oleh perwakilan keluarga lansia.
            </p>
          </div>
        </div>

      </div>
    </section> <br><br><br><br><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Kontak Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info-box mt-4">
              <i class="bx bx-map"></i>
              <h3>Address</h3>
              <p>RW.7 Pondok Bambu, Kec. Duren Sawit, Jakarta Timur, Daerah Khusus Ibukota Jakarta</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>posyandulansiabugar@gmail.com</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call</h3>
              <p>021-3110-9969</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    {{-- <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Posyandu Lansia Bugar</h3>
            <p>
              RW.7 Pondok Bambu <br>
              Kec. Duren Sawit, Jakarta Timur <br>
              Daerah Khusus Ibukota Jakarta <br><br>
              <strong>Phone:</strong> 021-3110-9969<br>
              <strong>Email:</strong> posyandulansiabugar@gmail.com<br>
            </p>
          </div> --}}

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          Skripsi 2021 <strong><span>Khairunnisa Aulia Jatmiko</span></strong>.
        </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('bootstrap')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('bootstrap')}}/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('bootstrap/assets/js/main.js')}}"></script>

</body>

</html>