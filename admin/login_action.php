<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';

// mengaktifkan session php
session_start();
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    $_SESSION['role'] = "admin";

	header("location:input_item.php");
}
else{
    header("location:login.php?pesan=gagal");
}
?>