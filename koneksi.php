<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ikp";

 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);
// mengecek koneksi
if (!$conn) {
    echo 'Error : '.mysqli_connect_error($conn);
}

?>