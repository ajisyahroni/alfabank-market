<?php
// echo exec('whoami');
session_start();

//memastikan apakah benar user yang input data
if ($_SESSION['role'] == 'admin') {
    include '../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $deskripsi = $_POST['deskripsi'];


    //proses upload foto
    $name       = $_FILES['foto_item']['name'];
    $temp_name  = $_FILES['foto_item']['tmp_name'];
    $unique_string = uniqid(rand());

    if (isset($name) and !empty($name)) {
        $location = '../file_upload/';
        $url_foto = $location . $unique_string . $name;



        if (move_uploaded_file($temp_name, $url_foto)) {
            echo 'File uploaded successfully';

            //lakukan query penyimpanan data
            $query_update = "UPDATE `item` SET `nama`='$nama',`stock`=$stock,`harga`=$harga,`foto`='$url_foto',`deskripsi`='$deskripsi' WHERE id = $id";
            mysqli_query($koneksi, $query_update);
            header("location:input_item.php");
        }
    } else {
        $query_update = "UPDATE `item` SET `nama`='$nama',`stock`=$stock,`harga`=$harga,`deskripsi`='$deskripsi' WHERE id = $id";
        mysqli_query($koneksi, $query_update);
        header("location:input_item.php");
    }
} else {
    header("location:login.php?pesan=gagal");
}
