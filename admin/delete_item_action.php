<?php

$id_item = $_GET['id'];


// HAPUS FILE GAMBAR 
include '../koneksi.php';
echo "hapus item $id_item";

$query_select = "SELECT * FROM item WHERE id=$id_item";
$hasil = mysqli_query($koneksi, $query_select);
$data = mysqli_fetch_object($hasil);

echo $data->foto;
unlink($data->foto);

$query_delete = "DELETE FROM item WHERE id=$id_item";
mysqli_query($koneksi, $query_delete);

header("location:input_item.php");
?>