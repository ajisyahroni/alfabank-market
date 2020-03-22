<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order masuk</title>
    <script src="https://kit.fontawesome.com/ec4eb7f29b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <?php
    include '../koneksi.php';
    $data = mysqli_query($koneksi, 'select * from item');

    ?>



</head>

<body>
    <!-- header -->
    <nav class="navbar bg-info navbar-dark">
        <!-- NAVBAR BRAND -->
        <a href="#" class="navbar-brand">
            <img src="../assets/image/logo-white.png" width="30px" alt="">
            Marketplace Alfa
        </a>

        <!-- NAVIGASI -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboard.html">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="order_saya.html">Order Saya</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about_us.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="login_customer.html">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- iklan -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://dummyimage.com/1200x500/7cbf8f/fff" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://dummyimage.com/1200x500/f59b42/fff" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://dummyimage.com/1200x500/8e7cbf/fff" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- konten -->

    <div class="container mt-4 mb-4">
        <div class="row">
            <?php
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <!-- PREVIEW GAMBAR -->
                        <img src="<?php echo $d['foto'] ?>" class="card-img-top" alt="Card image cap">
                        <!-- DESKRIPSI CARD -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $d['nama']; ?></h5>
                            <p class="card-text">Harga : Rp. <?php echo $d['harga']; ?></p>
                            <p class="card-text">Stock : <?php echo $d['stock']; ?> pcs</p>
                            <a href="checkout.php?id=<?php echo $d['id']; ?>" class="btn btn-info">beli</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

    </div>



    <!-- footerr -->
    <div class="footer bg-info">
        <p class="text-center text-white"> &copy;Alfabank 2020</p>
    </div>
</body>

</html>