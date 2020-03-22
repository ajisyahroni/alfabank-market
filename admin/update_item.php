<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inpu item</title>
    <!-- UNTUK MEMBUAT FONTAWESOME -->
    <script src="https://kit.fontawesome.com/ec4eb7f29b.js" crossorigin="anonymous"></script>
    <!-- INPUT BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        input {
            margin-top: 15px;
        }

        textarea {
            margin-top: 15px;
        }
    </style>
    <?php
    include "../koneksi.php";
    $id = $_GET['id'];
    $query_select = "SELECT * FROM item WHERE id = $id";

    $result = mysqli_query($koneksi, $query_select);
    $data = mysqli_fetch_object($result);



    ?>
</head>

<body>
    <nav class="navbar bg-info">
        <!-- NAVBAR BRAND -->
        <a href="#" class="navbar-brand text-white">
            <img src="../assets/image/logo-white.png" width="30px" alt="">
            Marketplace Alfa
        </a>

        <!-- NAVIGASI -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="input_item.html">Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="order_masuk.html">Order masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="login.html">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- kontent form -->
    <div class="container">
        <p class="mt-5">Halaman input item</p>
        <form action="update_item_action.php" method="post" enctype="multipart/form-data" class="card p-3 mb-5">
            <input value="<?php echo $data->nama; ?>" class="form-control form-control-lg" type="text" placeholder="nama produk" name="nama">
            <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Upload Gambar</label>
                <br>
                <img id="preview" src="<?php echo $data->foto; ?>" alt="" class="img-thumbnail">
                <input type="file" class="form-control-file" id="fotoUploader" name="foto_item">

                <script>
                    // mengambil element html dengan id
                    var foto = document.getElementById("fotoUploader")
                    var preview = document.getElementById("preview")

                    // membuat event onchange
                    foto.onchange = function(evt) {

                        var reader = new FileReader()
                        var file = evt.target.files[0]

                        reader.onload = function() {
                            preview.src = reader.result
                        }

                        reader.readAsDataURL(file)
                    }
                </script>


            </div>
            <input value="<?php echo $data->harga; ?>" class="form-control" type="number" placeholder="harga" name="harga">
            <input value="<?php echo $data->stock; ?>" class="form-control" type="number" placeholder="stock" name="stock">
            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <textarea class="form-control" id="" cols="30" rows="10" placeholder="deskripsi produk" name="deskripsi">
            <?php echo $data->deskripsi; ?>
            </textarea>
            <input type="submit" class="btn btn-success" value="update">
        </form>
    </div>

    <!-- footerr -->
    <div class="footer bg-info">
        <p class="text-center text-white"> &copy;Alfabank 2020</p>
    </div>
</body>

</html>