  <?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
  <title>Website IKP</title>
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link rel="shortcut icon" href="../image/LOGO.jpg">
  <link rel="stylesheet" href="../new.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <!-- Our CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <!-- //Introduction// -->
  <!-- add your custom CSS -->
  <style>
    body {
      font-family: sans-serif;
    }

    /* Add WA floating button CSS */
    .floating {
      position: fixed;
      width: 100px;
      height: 100px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .fab-icon {
      margin-top: 16px;
    }
  </style>
  <div id="about-header" class="container-fluid">
    <div class="row-runningtext">
      <span style="color: white; font-family: verdana; font-size: 20px; font-weight: bold;">
        <br>
        <marquee bgcolor="deeppink" behavior="scroll to right" height="45px" scroll amount="5" width="100%">
          Selamat Datang di Website Indo Karyatama Perkasa</marquee>
      </span>
    </div>
  </div>

  <div id="navbar">
    <ul>
      <?php if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] == false) { ?>
        <li><a href="./daftar/index.php">DAFTAR</a></li>
        <li><a href="login.php">LOGIN</a></li>
      <?php } ?>
      <li><a href="#">HOME</a></li>
      <li><a href="#kategori">CATEGORY</a></li>
      <li><a href="#produk">PRODUCT</a></li>
      <li><a href="#tentang">ABOUT US</a></li>
      <li><a href="#team">TEAM</a></li>
      <li><a href="#contact">CONTACT US</a></li>
      <li><a href="../index.php">LOG OUT</a></li>
    </ul>
  </div>

  <!--start-->
  <a href="#">
    <img src="../image/g.jpeg" alt="Image 1" width="100%">
  </a>
  <!--finish-->

  <!-- content -->
  <div id="content">

    <!--Start-->
    <div style="border-radius: 25px;" id="kategori">
      <br>
      <br>
      <br>
      <div class="footer-berita">
        <h2>CATEGORY</h2>
      </div>
      <br>
      <div class="row-team">
        <div class="column-kategori">
          <div class="card-team">
            <a href="#!">
              <center><i class="fas fa-box fa-4x"></i></center>
            </a>
            <div class="container-kategori">
              <center>
                <h3><a style="color:red" href="#produck">PRODUCT</a></h3>
              </center>
              <center>
                <p class="title-team">Kategori Produk/Barang</p>
              </center>
              <!-- <center>  <p class="price"></p> </center> -->
            </div>
          </div>
        </div>
        <div class="column-kategori">
          <div class="card-team">
            <a href="#!">
              <center><i class="fas fa-award fa-4x"></i></center>
            </a>
            <div class="container-kategori">
              <center>
                <h3><a style="color:red" href="#jasa">JASA</a></h3>
              </center>
              <center>
                <p class="title-team">Kategori Jasa</p>
              </center>
              <!-- <center>  <p class="price"></p> </center> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--finish-->

    <!--Start-->
    <div style="border-radius: 25px;" id="produck">
      <br>
      <br>
      <br>
      <div class="footer-berita">
        <h2>PRODUCT</h2>
      </div>
      <!-- <center><a style="font-size:38px" href="https://wa.me/6285810419993?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai.
          " target="_blank"><img src="../image/iconwa.jpeg" width="50px">Chat dengan tim kami </a></center> -->
      <a href="https://wa.me/6285810419993?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda." class="floating" target="_blank">
        <i class="fab fa-whatsapp fab-icon fa-2x"></i>
      </a>
      <br>
      <div class="row-potensi">
        <!-- <div class="column-potensi">
          <div class="card-potensi"> -->

        <!-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../admin/data_produck/images/<?php echo $d['image'];  ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $d['nama']; ?></h5>
                  <p class="card-text"><?php echo $d['deskripsi']; ?></p>
                  <a href="../view.php?nama=<?php echo $d['nama'];  ?>" class="btn btn-primary">LIHAT PRODUK</a>
                </div>
              </div> -->

        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php
          include '../koneksi.php';
          $no = 1;
          $data = mysqli_query($conn, "SELECT * FROM produck");
          while ($d = mysqli_fetch_array($data)) {
          ?>
            <div class="col">
              <div class="card h-100">
                <img src="../admin/data_produck/images/<?php echo $d['image'];  ?>" width="80%" class="card-img-top"
                  alt="ikp.img" />
                <div class="card-body">
                  <h2 class="card-title text-center"> <?php echo $d['nama']; ?></h2>
                  <p class="card-text">
                    <?php echo $d['deskripsi']; ?>
                  </p>

                </div>
                <div class="card-footer text-center">
                  <a href="../view.php?nama=<?php echo $d['nama'];  ?>" class="btn btn-primary">LIHAT PRODUK</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>

        <!-- <div class="card">
                <h2 style="color:navy"><?php echo $d['nama']; ?></h2>
                <img src="../admin/data_produck/images/<?php echo $d['image'];  ?>" width='100%' ; border=solid 3px red>
                <p class="deskripsi"><?php echo $d['deskripsi']; ?></p>
                <p><a href="../view.php?nama=<?php echo $d['nama'];  ?>"><button>LIHAT PRODUK</button></a></p>
              </div> -->

        <!-- </div>
        </div> -->
      </div>
    </div>
    <!--finish-->

    <!--Start-->
    <div style="border-radius: 25px;" id="jasa">
      <br>
      <br>
      <br>
      <div class="footer-berita">
        <h2>JASA</h2>
      </div>
      <br>
      <div class="row-potensi">
        <div class="column-potensi">
          <div class="card-potensi">
            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM jasa");
            while ($d = mysqli_fetch_array($data)) {
            ?>

              <div class="card1">
                <h2 style="color:navy"><?php echo $d['nama']; ?></h2>
                <img src="../image/<?php echo $d['image'];  ?>" width='100%' height=350px; border=solid 3px red>
                <p class="deskripsi"><?php echo $d['deskripsi']; ?></p>
                <p><a href="../view.php?nama=<?php echo $d['nama'];  ?>"><button>LIHAT PRODUK</button></a></p>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!--finish-->

    <!--Start-->
    <div id="tentang" />
    <br>
    <br>
    <br>
    <div class="footer-berita">
      <h2>ABOUT US</h2>
    </div>
    <div class="row-footer">

      <div class="column-footer">
        <div class="card-footer about-me">
          <br>
          <center>
            <h1 style="background-color:white; font-size:35px; border-radius:25px;">WEBSITE E-COMMERCE CV INDO KARYATAMA PERKASA</h1>
          </center>
          <br>
          <center><img src="../image/po.png" alt="proses" style="width : 300px; height: 300px;">
            <img src="../image/pr.jpeg" alt="proses" style="width : 300px; height: 300px;">
            <img src="../image/1.jpeg" alt="proses" style="width : 300px; height: 300px;">
          </center>
          <center><img src="../image/2.jpeg" alt="proses" style="width : 300px; height: 300px;">
            <img src="../image/3.jpeg" alt="proses" style="width : 300px; height: 300px;">
            <img src="../image/4.jpeg" alt="proses" style="width : 300px; height: 300px;">
          </center>
          <div class="container-footer">
            <center>
              <p style="color:white; font-size:20px; font-weight:800  "> CV INDO KARYATAMA PERKASA.</p>
            </center>
            <center>
              <p style="color:white; font-size:20px; font-weight:800  "> Berdiri sejak bulan Oktober tahun 2021, merupakan Jasa Jembuatan dan Pemasangan serta Maintenance Neonbox, Shopsign, Pylon Sign, Baliho, Banner - Dll</p>
            </center>
            <center>
              <p style="color:white; font-size:20px; font-weight:800  "> ONE STEP SOLUTION FOR YOUR ADVERTISING</p>
            </center>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    <!--finish-->

  </div>
  <!-- end content -->

  <!-- footer -->
  <div id="team">
    <br>
    <br>
    <br>
    <div id="footer">
      <center>
        <!-- <img class="logo-km2" src="../image/pl.jpeg" />
        <img class="logo-km2" src="../image/il.jpeg" />
        <img class="logo-km2" src="../image/bk.jpeg" /> -->
        <img class="logo-km2" src="../image/LOGO.jpg" style="width:20% " height="300px" />
      </center>
      <br>
      <center style="background-color:white">
        <h1 style="color:navy">OUR TEAM</h1>
        <h2 style="color:navy"></h2>
      </center>
      <br>
      <div class="row-team">
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center><img src="../image/uut.jpeg" alt="uut" style="width:100% " height="300px"></center>
              </a>
              <div class="container-kategori">

                <center>
                  <h3 style="color:red">Isti Setyo Utari</h3>
                </center>
                <center>
                  <p class="title-team">President Direktur</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6285810419993?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a></center>
                <a href="https://wa.me/082183381065?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/karyatama579/profilecard/?igsh=eG9uZWtyeTNmcnZh"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/1ApZmdnoYi/"><i class="fab fa-facebook-f"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center><img src="../image/an.jpeg" alt="angga" style="width:100% " height="300px"></center>
              </a>
              <div class="container-kategori">

                <center>
                  <h3 style="color:red">Angga Kusuma Adi Pradana</h3>
                </center>
                <center>
                  <p class="title-team">Wakil President Direktur</p>
                </center>
                <center>
                  <a style="font-size:18px" href="https://wa.me/6285161163779?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text" target="_blank"><img src="../image/iconwa.jpeg" width="30px"></a>
                </center>

                </center>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row-team">
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center><img src="../image/sept.jpeg" alt="Septi" style="width:100% " height="300px"></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Septi Nardi Riana</a></h3>
                </center>
                <center>
                  <p class="title-team">PIC</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6288233142624?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/6288233142624?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/rianasepti288?igsh=MWRnMms4MzIwMDh1MQ=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/nardiriana?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                </center>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center> <img src="../image/alex.jpeg" alt="alex" style="width:80%" height="300px"></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Alexs Giri Nikmatullah</a></h3>
                </center>
                <center>
                  <p class="title-team">PIC</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6283188071545?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/qr/6OYMPAZ42KCDM1" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/ax_means?igsh=Zmc5NGF1MHR0amRp=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/bhGmA9AxoF6dVXu4/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center><img src="../image/yu.jpeg" alt="Yuli" style="width:100%" height="300px"></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Yuli Malikhah</a></h3>
                </center>
                <center>
                  <p class="title-team">Bendahara</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6287766280312?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a></center>
                <a href="https://wa.me/6287766280312?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/ansanrfa?igsh=MWxoeGllMGY1c2pkcg=="><i class="fab fa-instagram"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row-team">
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center><img src="../image/ro.jpeg" alt="roy" style="width:100% " height="300px"></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Roy Saifudin</a></h3>
                </center>
                <center>
                  <p class="title-team">Design Grafis</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6281229041568?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/qr/YOUAKVBPDYIYL1" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/rianasepti288?igsh=MWRnMms4MzIwMDh1MQ=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/nardiriana?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center> <img src="../image/mu.jpeg" alt="mustofa" style="width:80%" height="300px"></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Mustofa</a></h3>
                </center>
                <center>
                  <p class="title-team">Inventory</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6289677005392?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/6283188071545?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/ax_means?igsh=Zmc5NGF1MHR0amRp=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/bhGmA9AxoF6dVXu4/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center><img src="../image/ra.jpeg" alt="rakim" style="width:100%"></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Rakim</a></h3>
                </center>
                <center>
                  <p class="title-team">Inventory</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6285742945055?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/6287766280312?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/ansanrfa?igsh=MWxoeGllMGY1c2pkcg=="><i class="fab fa-instagram"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row-team">
        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center> <img src="../image/ma.jpeg" alt="maryati" style="width:80%" height="300px"></i></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Maryati</a></h3>
                </center>
                <center>
                  <p class="title-team">PIC</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/6287766280312?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/6287766280312?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center> <img src="../image/dil.jpeg" alt="dila" style="width:80%" height="300px"></i></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Annis FadillaH</a></h3>
                </center>
                <center>
                  <p class="title-team">HRD</p>
                </center>
                <a style="font-size:18px" href="https://wa.me/qr/XQL5BTIMRJ5JL1?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px">Chat. Me </a>
                <a href="https://wa.me/qr/XQL5BTIMRJ5JL1?text=Hi%20Qiscus" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="kolom">
          <div class="column-team">
            <div class="card-team">
              <a href="#!">
                <center> <img src="../image/w.jpeg" alt="wengky" style="width:80%" height="300px"></i></center>
              </a>
              <div class="container-kategori">
                <center>
                  <h3><a style="color:red">Wengky Novanda</a></h3>
                </center>
                <center>
                  <p class="title-team">Design Grafis</p>
                </center>
                <a style="font-size:18px" href=" https://wa.me/qr/6QUJCB7FCCMZI1?text=Hai%20,%20Saya%20tertarik%20dengan%20produk%20anda=&text=Hai, saya tertarik dengan produk anda." target="_blank"><img src="../image/iconwa.jpeg" width="30px ">Chat. Me </a>
                <a href="https://wa.me/qr/6QUJCB7FCCMZI1" class="floating" target="_blank">
                  <i class="fab fa-whatsapp fab-icon fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/wengkyno/Wengky?igsh=Zmc5NGF1MHR0amRp=="><i class="fab fa-instagram"></i></a>
                <a href="https://m.facebook.com/wengkynovanda/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="contact">
        <br>
        <br>
        <br>
        <div class="row-footer">
          <div class="column-footer">
            <div class="card-footer">
              <div class="container-footer">
                <center>
                  <h1 style="background-color:white; font-size:35px; border-radius:25px;">CONTACK US</h1>
                </center>
                <form action="../store_pesan.php" method="POST" enctype="multipart/form-data">
                  <label style="color:white; font-size:15px;" for="nama">Nama :</label>
                  <input style="background-image:linear-gradient(#68f3f8,gray);" type="text" id="nama" name="nama" placeholder="Nama....*" required>
                  <label style="color:white; font-size:15px;" for="email">Email :</label>
                  <input style="background-image:linear-gradient(#68f3f8,gray);" type="email" id="email" name="email" placeholder="...@domain.com*" required>
                  <label style="color:white; font-size:15px;" for="kontak">No. Hp :</label>
                  <input style="background-image:linear-gradient(#68f3f8,gray);" type="text" id="kontak" name="kontak" placeholder="0888....*" required>
                  <label style="color:white; font-size:15px;" for="pesan">Pesan</label>
                  <textarea style="background-image:linear-gradient(#68f3f8,gray);height:200px" id="pesan" name="pesan" placeholder="TULIS PESAN DISINI!!!!!*" required></textarea>
                  <input type="submit" value="Submit">
                </form>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer2">
      <span>
        <marquee behavior="alternate" height="27px" scroll amount="5" width="100%">
          Copyright &copy 2024 IKP </marquee>
      </span>
      <span>
        <marquee behavior="scroll to right" height="27px" scroll amount="5" width="100%">
          SEPTI NARDI RIANA </marquee>
      </span>
    </div>
    <!-- end  footer -->
</body>

</html>