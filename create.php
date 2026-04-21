<?php
include '../koneksi.php';
?>

<section class="section">
  <!-- <div class="section-header d-flex justify-content-between">
    <h1>Tambah Dosen</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div> -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>username</td>
                <td><input class="form-control" type="text" name="username" size="20" required></td>
              </tr>

              <tr>
                <td>password</td>
                <td><input class="form-control" type="password" name="password" size="20" required></td>
              </tr>

              <tr>
                <td>alamat</td>
                <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" required></textarea></td>
              </tr>
              
              <tr>
                <td>no_hp</td>
                <td><input class="form-control" type="number" name="no_hp" size="20" required></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="DAFTAR">
                  
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>
