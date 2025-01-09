<?php
include("connect.php");
$mr_id = $_POST['mr_id'];
$re_id = $_POST['re_id'];
$u_id = $_POST['u_id'];
$u_name = $_POST['u_name'];
$email = $_POST['email'];
$b_date = $_POST['b_date'];
$u_age = $_POST['u_age'];
$p_no = $_POST['p_no'];
$education = $_POST['education'];
$skill = $_POST['skill'];
$experience = $_POST['experience'];
$pdf_file = $_POST['pdf_file'];

$q = "update users set u_name='$u_name',email='$email',b_date='$b_date',u_age='$u_age',p_no='$p_no' where u_id='$u_id'";
mysqli_query($cn, $q);
print $q;
$r = "update user_resume set education='$education',skill='$skill',experience='$experience' where re_id='$re_id'";
mysqli_query($cn, $r);
print $r;

$d = "update my_resume set pdf_file='$pdf_file'where mr_id='$mr_id'";
mysqli_query($cn, $d);
print $d;
