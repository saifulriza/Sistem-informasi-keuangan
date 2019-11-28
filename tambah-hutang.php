<?php
//include('dbconnected.php');
include('koneksi.php');

$jumlah = $_GET['jumlah'];
$tgl_hutang = $_GET['tgl_hutang'];
$penghutang = $_GET['penghutang'];
$alasan = $_GET['alasan'];


//query update
$query = mysqli_query($koneksi,"INSERT INTO `hutang` (`jumlah`, `tgl_hutang`, `alasan`, `penghutang`) VALUES ('$jumlah', '$tgl_hutang', '$alasan','$penghutang')");

if ($query) {
 # credirect ke page index
 header("location:hutang.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>