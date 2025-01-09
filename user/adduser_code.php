<?php
include("connect.php");
$u_name = $_POST['u_name'];
print $u_name;

$email = $_POST['email'];
print $email;
$p_no = $_POST['p_no'];
print $p_no;
$b_date = $_POST['b_date'];
print $b_date;
$u_age = $_POST['u_age'];
print $u_age;
$education = $_POST['education'];
print $education;
$skill = $_POST['skill'];
print $skill;
$experience = $_POST['experience'];
print $experience;

$password = $_POST['password'];
print $password;

$basefile = 'resume/' . basename($_FILES['pdf_file_img']['name']);

if (move_uploaded_file($_FILES['pdf_file_img']['pdf_file'], $basefile)) {
    echo "File Uploaded";
} else {
    echo "Error";
}

$q = "insert into users(u_name,email,p_no,b_date,u_age,password) values ('$u_name','$email','$p_no','$b_date','$u_age','$password')";
mysqli_query($cn, $q);
print $q;
$r = "select * from users ORDER BY u_id DESC";
$rs1 = mysqli_query($cn, $r);

$row1 = mysqli_fetch_array($rs1);
$u_id = $row1['u_id'];
$p = "insert into user_resume(u_id,education,skill,experience) values ('$u_id','$education','$skill','$experience')";
mysqli_query($cn, $p);
print $p;
$d = "insert into my_resume(u_id,pdf_file) values ('$u_id','$basefile')";
mysqli_query($cn, $d);
print $d;
header("location:uindex.php");
