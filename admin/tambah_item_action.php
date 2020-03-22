<?php
// echo exec('whoami');
session_start();

//memastikan apakah benar admin yang input data
if ($_SESSION['role'] == 'admin') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $deskripsi = $_POST['deskripsi'];
    $url_foto = '';

    $folder = "../file_upload/  ";
    $name = $_FILES['foto_item']['name'];
    $tmp_name = $_FILES['foto_item']['tmp_name'];

    $unik_name = uniqid(rand());
    $url_foto = $folder . $unik_name . $name;

    
    if(move_uploaded_file($tmp_name,$url_foto)){
        include '../koneksi.php';
        mysqli_query($koneksi, "insert into item (nama,harga,stock,deskripsi,foto) values ('$nama','$harga','$stock','$deskripsi','$url_foto')");
        header("location:input_item.php");
    }
    else{
        echo "Gagal menambahkan file";
    }

    

    


   
} else {
    header("location:login.php?pesan=gagal");
}
