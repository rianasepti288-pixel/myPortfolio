<?php
	
	include 'koneksi.php';
	session_start();
	if($_SESSION['status_login'] != true ){
		echo '<script> window.location="loginadmin.php"</script>';
	} 	
?>

<html>
<head>
	<meta charset="utf-8";>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> kategori warung </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>

<body>
	<!--header-->
	<header> 
		<div class="container">
		<h1><a href="dashboardadmin.php"> MARTABAK</a></h1>
		<ul> 
			<li><a href ="dashboardadmin.php">DASHBOARD</a></li>
			<li><a href ="profile.php">PROFILE</a></li>
			<li><a href ="kategori.php">DATA KATEGORI</a></li>
			<li><a href ="produk.php">DATA PRODUK</a></li>
			<li><a href ="keluar.php">LOGOUT</a></li>
			
			
		
		</ul>
		</div>
	</header>
	
	<!--content-->
		<div class="section">
			<div class="container">
					<h3>DATA KATEGORI</h3>
				<div class= "box">
				
				<p><a href="tambah-kategori.php	">Tambah Data</a></p>
					<table border="1" cellspacing="0" class="table">
						<thead>
							<tr>
								<th width="60px">No</th>
								<th> Kategori</th>
								<th width="200px">Aksi</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
								$no = 1;
								$kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id DESC");
								if(mysqli_num_rows($kategori) > 0){
								while($row = mysqli_fetch_array($kategori)){
									
								
							?>
							<tr>
								<td><?php echo $no++?></td>
								<td> <?php echo $row['kategori_nama'] ?></td>
								<td>
									<a href="edit-kategori.php?id=<?php echo $row['kategori_id'] ?>">Edit</a> || 
									<a href="proses-hapus.php?idk=<?php echo $row['kategori_id'] ?>" onclick="return confirm('yakin mau dihapus')">Hapus</a>
								</td>
							</tr>
							
								<?php }}else{ ?>
								<tr>
									<td colspan="3">Tidak ada data</td>
								</tr>
								<?php } ?>
						</tbody>
						
					</table>
					
				</div>
			
			</div>
		</div>
		
	<!--footer-->
		<footer> 
			<div class="container">
				<small>Copyright &copy;2023 - Martabak Atia</small>
			</div>
			
		</footer>
</body>
</html>