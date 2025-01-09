
<?php
include("connect.php");

$ap_date = date('F j Y, h:i:s A');
print $ap_date;

// $ap_date = $_POST['ap_date'];
// print $ap_date;

$u_id = $_SESSION['u_id'];
print $u_id;
$post_id = $_GET['post_id'];
print $post_id;
$status = $_POST['status'];
print $status;


$q = "insert into users(ap_date,u_id,post_id,status) values ('$ap_date','$u_id','$post_id','$status')";
mysqli_query($cn, $q);
print $q;

header("location:ujob-listings.php");
