<?php
$request = $_SERVER['REQUEST_URI'];
echo $request;

if ($request == '/') {
    header("location:./customer/login_customer.php");
}

else if ($request == '/admin_login') {
    header("location:./admin/login.php");
}

else{
    echo 'im sorry page not found';
}

?>


