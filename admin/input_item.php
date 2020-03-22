<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input item</title>
    <!-- UNTUK MEMBUAT FONTAWESOME -->
    <script src="https://kit.fontawesome.com/ec4eb7f29b.js" crossorigin="anonymous"></script>
    <!-- INPUT BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <nav class="navbar bg-info">
        <!-- NAVBAR BRAND -->
        <a href="input_item.php" class="navbar-brand text-white">
            <img src="../assets/image/logo-white.png" width="30px" alt="">
            Marketplace Alfa
        </a>

        <!-- NAVIGASI -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="input_item.php">Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="order_masuk.php">Order masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="logout_action.php">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- KONTEN ITEM -->
    <div class="container">
        <p class="mt-5">Halaman Manajemen Item</p>
        <a href="tambah_item.php" class="btn btn-outline-info"> <i class="far fa-plus-square"></i> Tambah Item</a>

        <!-- CARA ITEM -->
        <div class="row mt-5">

            <?php
            // session_start();

            // echo $_SESSION['email'];
            // echo '</br>';
            // echo $_SESSION['status'];
            // echo '</br>';
            // echo $_SESSION['role'];
             
            include '../koneksi.php';
            $data = mysqli_query($koneksi, 'select * from item');

            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <!-- PREVIEW GAMBAR -->
                        <img src="<?php echo $d['foto']; ?>" class="card-img-top" alt="Card">
                        <!-- DESKRIPSI CARD -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $d['nama']; ?></h5>
                            <p class="card-text">Harga : <?php echo $d['harga']; ?></p>
                            <p class="card-text">Stock : <?php echo $d['stock']; ?> pcs</p>
                            <br>
                            <p class="card-text">
                                <?php echo $d['deskripsi']; ?>
                            </p>
                            <a href="update_item.php?id=<?php echo $d['id']; ?>" class="btn btn-info"><i class="far fa-edit"></i></a>
                            <a href="delete_item_action.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        </div>

                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

    <div class="footer bg-info">
        <p class="text-center text-white"> &copy;Alfabank 2020</p>
    </div>
</body>

</html>