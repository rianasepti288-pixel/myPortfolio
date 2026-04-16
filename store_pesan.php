<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$email  = $_POST['email'];
$kontak = $_POST['kontak'];
$pesan = $_POST['pesan'];

$query = mysqli_query($conn, "insert into tb_inbox(nama, email, kontak, pesan) value('$nama', '$email', '$kontak', '$pesan')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'TERDAPAT PESAN BARU !!!!!'
  ];
  header('Location: ./dasboard/index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./dasboard/index.php');
}