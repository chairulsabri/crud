<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id_mhs yang di kirim dari url
$id_mhs = $_GET['id_mhs'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_mahasiswa where id_mhs='$id_mhs'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>