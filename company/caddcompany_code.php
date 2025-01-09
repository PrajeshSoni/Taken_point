<?php
include("connect.php");
$com_name = $_POST['com_name'];
print $com_name;
$add_1 = $_POST['add_1'];
print $add_1;
$city = $_POST['city'];
print $city;
$state = $_POST['state'];
print $state;
$country = $_POST['country'];
print $country;
$zip = $_POST['zip'];
print $zip;
$phone  = $_POST['phone '];
print $phone;
$fax = $_POST['fax'];
print $fax;
$email = $_POST['email'];
print $email;
$website_url = $_POST['website_url'];
print $website_url;
$com_profile = $_POST['com_profile'];
print $com_profile;

$password = $_POST['password'];
print $password;

$basefile = 'photo/' . basename($_FILES['logo']['name']);

if (move_uploaded_file($_FILES['logo']['logo'], $basefile)) {
  echo "File Uploaded";
} else {
  echo "Error";
}

$q = "insert into users(com_name,add_1,city,state,country,zip,phone,fax,email,website_url,com_profile,logo,password) values ('$com_name','$add_1','$city','$state','$country','$zip','$phone','$fax','$basefile','$website_url','$com_profile','$email','$password')";
mysqli_query($cn, $q);
print $q;

header("location:cindex.php");
