<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nama_product = $_GET['nama_product'];
$query = mysqli_query($connection, "SELECT * FROM data_produck WHERE nidn='$nama_product'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Dosen</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="nidn" value="<?= $row['nidn'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Nama Product</td>
                  <td><input class="form-control" type="varchar" name="nama_product" size="20" required value="<?= $row['nama_product'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Toko</td>
                  <td><input class="form-control" type="varchar" name="toko" size="20" required value="<?= $row['toko'] ?>"></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" required><?= $row['alamat'] ?></textarea></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>