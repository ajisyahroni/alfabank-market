<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['status']);
unset($_SESSION['role']);

session_destroy();

header("location:login.php");
