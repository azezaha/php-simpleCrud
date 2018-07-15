<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
 	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$notelepon = $_POST['notelepon'];
	
  //buat dan jalankan query UPDATE
  $query  = "UPDATE mahasiswa SET ";
  $query .= "nama = '$nama', ";
  $query .= "alamat='$alamat', ";
  $query .= "notelepon = '$notelepon' ";
  $query .= "WHERE id = '$id'";

echo "$query";
 $result = mysqli_query($link, $query);

  // periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");

?>