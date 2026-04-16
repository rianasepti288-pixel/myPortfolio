<!DOCTYPE html>
<html>

<head>
    <title>Website IKP</title>
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="shortcut icon" href="image/LOGO.jpg">
    <link rel="stylesheet" href="./new.css" />
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
</head>
<div class="footer-berita">
    <h2>Detail Product</h2>
</div>
<div class="row-berita">
    <div class="leftcolumn">

        <div class="card-left">
            <div class="header2">
                <!-- <a href="./index.php" class="btn btn-info" role="button">HOME</a> -->
                <input class="btn btn-info" type="button" value="KEMBALI" onclick="history.back(-1)" />
            </div>

            <?php
            include 'koneksi.php';

            $nama = $_GET['nama'];
            $result = mysqli_query($conn, "SELECT * FROM produck WHERE nama='$nama'");
            while ($d = mysqli_fetch_assoc($result)) :
            ?>
                <div class="header-berita">

                    <center>
                        <h1 style="color:navy"><?php echo $d['nama']; ?></h1>
                    </center>
                </div>
                <!-- <div class="card"> -->
                <br>
                <center><img src="./admin/data_produck/images/<?php echo $d['image'];  ?>" width='60%' height='400px' style="border:solid 5px navy;" /></center>
                <br>
                <!-- <p class="price"><?php echo $d['Price']; ?></p> -->
                <h2 class="deskripsi"><?php echo $d['deskripsi']; ?></h2>

                <!-- <p><a href="view.php?no=<?php echo $d['no'];  ?>"><button>LIHAT PRODUK</button></a></p> -->


            <?php endwhile; ?>

            <?php
            include 'koneksi.php';

            $nama = $_GET['nama'];
            $result = mysqli_query($conn, "SELECT * FROM jasa WHERE nama='$nama'");
            while ($d = mysqli_fetch_assoc($result)) :
            ?>
                <div class="header-berita">

                    <center>
                        <h1 style="color:navy"><?php echo $d['nama']; ?></h1>
                    </center>
                </div>

                <br>
                <center><img src="../e-commerce/image/<?php echo $d['image'];  ?>" width='60%' height='400px' style="border:solid 5px navy;" /></center>
                <br>
                <!-- <p class="price"><?php echo $d['Price']; ?></p> -->
                <h2 class="deskripsi"><?php echo $d['deskripsi']; ?></h2>

                <!-- <p><a href="view.php?no=<?php echo $d['no'];  ?>"><button>LIHAT PRODUK</button></a></p> -->
        </div>
    </div>
<?php endwhile; ?>
</div>