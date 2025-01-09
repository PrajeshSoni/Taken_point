<?php
include("connect.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$q = "select * from company where email='$email' and password='$password'";
$rs = mysqli_query($cn, $q);
if ($row = mysqli_fetch_array($rs)) {
    $_SESSION['com_id'] = $row['com_id'];
    header("location:cindex.php");
} else {
    header("location:clogin.php");
}
