<?php
include("connect.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$q = "select * from users where email='$email' and password='$password'";
$rs = mysqli_query($cn, $q);
print $q;
if ($row = mysqli_fetch_array($rs)) {
    $_SESSION['u_id'] = $row['u_id'];
    header("location:user/uindex.php");
} else {
    header("location:login.php");
}
