<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>tugas</title>
</head>
<body>

	<h2>Tugas crud</h2>
	<p>Dicky Prima Arya W</p>
	<br/>
	<div id="tambahsiswa">
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
</div>
	<br/>
	<br/>
		<div id="customers">
	<table border="1" width="60%">
		<tr>
			<th>NO</th>
			<th>id_mhs</th>
			<th>Nama</th>
			<th>jurusan</th>
			<th colspan="2">Aksi</th>
		</tr>
		</div>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_mhs']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td align="center">
				<div id="edit">
					<a href="edit.php?id_mhs=<?php echo $d['id_mhs']; ?>">EDIT</a>
				</div>
				</td>
				<td align="center">
				<div id="hapus">
					<a href="hapus.php?id_mhs=<?php echo $d['id_mhs']; ?>">HAPUS</a>
				</div>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

</body>
</html>