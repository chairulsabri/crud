<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Edit Data Mahasiswa</title>
</head>
<body>
 
	<h2></h2>
	<br/>
	<div id="kembali">
	<a href="index.php">KEMBALI</a></div>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id_mhs = $_GET['id_mhs'];
	$data = mysqli_query($koneksi,"select * from tb_mahasiswa where id_mhs='$id_mhs'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
				<tr>
					<td>ID</td>
					<td><input type="text" name="id_mhs" value="<?php echo $d['id_mhs']; ?>"></td>
				</tr>		
					<td>NAMA</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>JURUSAN</td>
					<td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>