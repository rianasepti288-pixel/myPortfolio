<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$query = mysqli_query($conn, "insert into user(username, password, alamat, no_hp) value('$username', '$password', '$alamat', '$no_hp')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ../login.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ../login.php');
                                            }
