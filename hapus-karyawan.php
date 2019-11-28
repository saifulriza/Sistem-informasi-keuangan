<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_karyawan'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `karyawan` WHERE id_karyawan = '$id'");

if ($query) {
 # credirect ke page index
 header("location:karyawan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>