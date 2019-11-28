<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_hutang'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `hutang` WHERE id_hutang = '$id'");

if ($query) {
 # credirect ke page index
 header("location:hutang.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>