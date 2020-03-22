<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets//bootstrap/css/bootstrap.css">
    <style>
        .bg {
            height: 100vh;
            background-color: #f7a128;
        }

        .bg2 {
            height: 100vh;
            background-color: blue;
        }

        .bg img {
            max-width: 50%;
        }

        .radiusku {
            border-radius: 50px;
        }

        .warna {
            color: white;
        }

        input {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 bg d-flex justify-content-center">
                <img src="../assets/image/logistics.svg" alt="">
            </div>
            <div class="col-md-5 bg2 d-flex justify-content-center align-items-center">
                <!-- CARA MASUKAN MENUJU KE INPUT ITEM KYK DIBAWAH -->
                <form action="login_action.php" method="post">
                    <h1 class="warna">Hi, Admin!</h1>
                    <br>
                    <input type="email" class="form-control" placeholder="email" name="email">
                    <input type="password" class="form-control" placeholder="password" name="password">

                    <input type="submit" class="btn btn-danger radiusku" value="login">
                    
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo ('<div class="alert alert-danger mt-5" role="alert">
                            Login gagal
                            </div>');
                        }
                    }
                    ?>
                </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>