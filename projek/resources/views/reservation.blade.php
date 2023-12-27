<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Reservation</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/pemesanan.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/img/inca.png" alt="">
                        </a>
                        <ul class="nav">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li><a href="{{ route('about')}}">About</a></li>
                            <li><a href="{{ route('facilities')}}">Facilities</a></li>
                            <li><a href="{{ route('reservation')}}" class="active">Reservation</a></li>
                            <li><a href="{{ route('profile')}}">Profile <img src="assets/img/profile-header.jpg" alt=""></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="page-content">
                  <!-- ***** Most Popular Start ***** -->
                  <div class="most-popular">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="heading-section">
                                  <h4><em>Make Your</em> Reservation</h4>
                              </div>
                              <form action="{{ route('pemesanan.store') }}" method="POST">
                                  @csrf

                                  <label for="package">Package:</label>
                                  <select name="id_paket" id="id_paket" required>
                                      @foreach($pakets as $paket)
                                      <option value="{{ $paket->id_paket }}">{{ $paket->nama_paket }}</option>
                                      @endforeach
                                  </select>

                                  <br>

                                  <label for="table_number">Table Number:</label>
                                  <input type="number" name="id_meja" id="id_meja" min="1" max="10" required>

                                  <br>

                                  <label for="order_date">Order Date:</label>
                                  <input type="date" name="tanggal_pemesanan" id="tanggal_pemesanan" required>

                                  <br>

                                  <input type="submit" value="Submit">
                              </form>
                          </div>
                      </div>
                  </div>
                  <!-- ***** Most Popular End ***** -->

                  <!-- ***** Gaming Library Start ***** -->
                  <!-- ... (gaming library section) ... -->
                  <!-- ***** Gaming Library End ***** -->
              </div>
          </div>
      </div>
  </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>
