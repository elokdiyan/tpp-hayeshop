<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKota = $_GET['id_kota'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kota  WHERE id_kota='$idKota'");

	if ($queryHapus) {
		echo "<script>alert('Data Kota Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=kota';</script>";
	}else{
		echo "<script>alert('Data Kota Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=$idKota';</script>";
	}
}
 ?>
