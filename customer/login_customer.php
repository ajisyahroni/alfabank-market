<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .left img {
            width: 50%;
        }

        .left {
            height: 100vh;
            background-color: #f7a128;
        }

        .right {
            height: 100vh;
            background-color: blue;
        }

        input {
            margin-bottom: 10px;
        }

        body {
            overflow-x: hidden;
        }

        .tombolku {
            background-color: red;
            border-radius: 50px;
            color: white;
        }

        h1 {
            color: white;
        }

        @media screen and (max-width: 769px) {
            .left{
                display: none !important;
            }
        }
        
    </style>
</head>

<body>
    <div class="row">
        <div class="left col-md-7 d-flex justify-content-center">
            <img src="../assets/image/auth.svg" alt="">
        </div>

        <div class="right col-md-5 d-flex justify-content-center align-items-center">
            <form action="dashboard.html" method="GET" style="width:50%">
                <h1>Hi, There!</h1>
                <br>
                <br>
                <input type="email" class="form-control" width="30%" placeholder="email">
                <input type="password" class="form-control" width="30%" placeholder="password">
                <small>Don't have an account? <a href="daftar.html" class="text-white">sign up here!</a> </small> <br>
                <input type="submit" class="btn tombolku mt-3">
            </form>
        </div>
    </div>
</body>

</html>