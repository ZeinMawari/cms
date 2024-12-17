
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel Fish Blue</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/landing/'); ?>css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                            <img src="assets/landing/img/pin.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                          </a>
                            <ul>

                                <li class="active"><a href="http://localhost/cms/">Homepage</a></li>
                                <li><a href="<?= base_url('home/kategori') ?>">Categories <span class="arrow_carrot-down"></span></a>
    <ul class="dropdown">
        <?php foreach ($kategori as $kate){ ?>
            <li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a></li>
            </a>
            <?php } ?>
    </ul>
</li>



                        <li>
                        <a href="<?= base_url('auth') ?>"><span class="icon_profile"></span></a>
                        </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="http://localhost/cms/"><i class="fa fa-home"></i> Home</a>
                        <a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">Categories</a>
                        <span><?= $konten->nama_kategori ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <!-- Kolom Gambar -->
                <div class="col-lg-4 col-md-5">
                    <div class="anime__details__pic">
                        <!-- Menggunakan img-fluid untuk memastikan gambar responsif dan tidak ter-crop -->
                        <img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="<?= $konten->nama ?>" class="img-fluid">
                    </div>
                </div>

                <!-- Kolom Deskripsi -->
                <div class="col-lg-8 col-md-7">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3><?= $konten->judul ?></h3> <!-- Nama anime -->
                            <span><?= $konten->nama_kategori ?></span> <!-- Nama kategori -->
                        </div>
<!-- 
                        <div class="anime__details__rating mb-3">
                            <div class="rating">
                                
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
                        </div> -->

                        <p><?= $konten->keterangan; ?></p> <!-- Deskripsi anime -->

                        <div class="anime__details__btn mt-4">
                            <!-- Tombol Follow dan Watch Now -->
                            <a href="http://localhost/cms/" class="follow-btn"><i class=""></i> Kembali </a>
                            <a href="https://wa.me/085601699606?text=Halo%2C%20saya%20ingin%20membuat%20pesanan%20untuk%20produk%20ini.%20Tolong%20berikan%20informasi%20lebih%20lanjut." class="watch-btn">
                            <span>Membuat Pesanan</span> <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

    <!-- Footer Start -->
    <footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="d-flex justify-content-start mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
    <div>
    <div class="row pt-5">
    <div class="col-lg-4 col-md-6 mb-5">
    <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
          >
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-white"><?= $konfig->judul_website; ?></span>
          </a>
          <p>
            <?= $konfig->profil_website; ?>
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="<?= $konfig->facebook; ?>"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="https://www.instagram.com/z.yeinn?igsh=MTh3YmtvdDVkdGlwMg=="<?= $konfig->instagram; ?>
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Contact Us</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Alamat</h5>
              <p><?= $konfig->alamat; ?></p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p><?= $konfig->email; ?></p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Phone</h5>
              <p><?= $konfig->no_wa; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="<?= base_url() ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
            <?php foreach($kategori as $kate){ ?>
                <a class="text-white mb-2" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
                    <i class="fa fa-angle-right mr-2"></i>
                    <?= $kate['nama_kategori'] ?>
                </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
      >
        <p class="m-0 text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="#"><?= $konfig->judul_website; ?></a>.
          All Rights Reserved.
        </p>
      </div>
    </div>



  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="<?= base_url('assets/landing/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/player.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/mixitup.min.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/landing/'); ?>js/main.js"></script>


</body>

</html>
