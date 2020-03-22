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
    include "../koneksi.php";
    $id = $_GET['id'];


    $query_select = "SELECT * FROM item WHERE id = $id";
    $result = mysqli_query($koneksi, $query_select);
    $data = mysqli_fetch_object($result);


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
                <a class="nav-link text-white" href="order_saya.html">
                    Order Saya <span id="orderBadge" class="badge badge-danger">0</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about_us.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="login_customer.html">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- kontent form -->
    <div class="container mb-5 mt-5">
        <p class="mb-5">halaman detail produk & order</p>
        <div class="row">
            <div class="col-md-4">
                <img class="img-thumbnail" id="foto" src="<?php echo $data->foto; ?>" alt="">
            </div>
            <div class="col-md-8">
                <h3>Detail Produk</h3>
                <hr>
                <p>Nama : <span id="nama"><?php echo $data->nama; ?></span></p>
                <p>Harga : Rp. <span id="harga"><?php echo $data->harga; ?></span>,-</p>
                <p>Stock : <?php echo $data->stock; ?> pcs</p>
                <hr>
                <p>Deskripsi produk : </p>
                <p><?php echo $data->deskripsi; ?></p>
                <hr>
                <!-- <form > -->
                <label for="">Order</label>
                <input id="jumlah" class="form-control mb-3" type="number" placeholder="masukkan jumlah">
                <input id="orderBtn" class="btn btn-success" type="submit" value="order now">
                <script>
                    var orderBtn = document.getElementById("orderBtn")
                    var orderBadge = document.getElementById("orderBadge")

                    var jumlahOrder = 0;

                    // MAKE AN ARRAY 
                    var arrayOfOrder = []

                    // GET ALL DATA FROM DETAIL 
                    var nama = document.getElementById("nama").innerHTML
                    var harga = document.getElementById("harga").innerHTML
                    var jumlah = document.getElementById("jumlah").value
                    var foto = document.getElementById("foto").src


                    orderBtn.onclick = function() {

                        // SET LOKAL VARIABLE 
                        arrayOfOrder.push({
                            nama: nama,
                            harga: harga,
                            jumlah: 45,
                            foto: foto,
                            tanggal: new Date()
                        })

                        // console.log('arrayOfOrder :', arrayOfOrder);
                        localStorage.setItem("order", JSON.stringify(arrayOfOrder))

                        jumlahOrder++
                        orderBadge.innerHTML = jumlahOrder;

                        localStorage.setItem("jumlahOrder", jumlahOrder)

                    }


                    var local = localStorage.getItem("jumlahOrder")

                    if (local) {
                        orderBadge.innerHTML = local
                    }
                </script>
                <!-- <button class="btn btn-success" id="orderBtn">order now</button> -->
                <!-- </form> -->
            </div>
        </div>
    </div>

    <!-- footerr -->
    <div class="footer bg-info">
        <p class="text-center text-white"> &copy;Alfabank 2020</p>
    </div>


</body>

</html>