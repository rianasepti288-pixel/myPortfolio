 <!--        <?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    session_start();

    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $cek = mysqli_query($conn, "SELECT * FROM user WHERE username ='" . $user. "'");
    if (mysqli_num_rows($cek) > 0) {
        $d = mysqli_fetch_object($cek);
        if (password_verify($_POST['pass'], $d->password)) {
            $_SESSION['status_login'] = true;
            $_SESSION['a_global'] = $d;
            $_SESSION['id'] = $d->id;
            echo '<script>window.location="dasboard/index.php"</script>';
        } else {
            echo '<script>alert("username atau password anda salah !")</script>';    
        }
    } else {
        echo '<script>alert("username atau password anda salah !")</script>';
    }
}
?>   

	
<html lang="en">
<head>
	<meta charset="utf-8";
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login IKP </title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="preconnect" href="http://localhost/kopi/404not.html">
	
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>	
        <input type="text" name="user" placeholder="username" class="input-control">

        <label for="password">Password</label>
        <input type="password" name="pass" placeholder="password" class="input-control">

      <input type="submit" name="submit" value="Login" class="btn">
      <a href="daftar/index.php">Buat Akun</a>
	
	<p>Copyright &copy;2024 -CV.IKP</p>
    </form>
		
</body>
</html> -->