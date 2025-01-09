<?php
include("connect.php");
$status = $_POST['status'];
$ap_id = $_POST['ap_id'];

$q = "update apply set status='$status'where ap_id='$ap_id'";
mysqli_query($cn, $q);
print $q;
header("location:cviewpost.php");
