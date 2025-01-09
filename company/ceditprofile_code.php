
<?php
include("connect.php");

$com_id = $_POST['com_id'];
$com_name = $_POST['com_name'];
$add_1 = $_POST['add_1'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$website_url = $_POST['website_url'];
$com_profile = $_POST['com_profile'];
$basefile = 'photo/' . basename($_FILES['logo']['name']);

if (move_uploaded_file($_FILES['logo']['logo'], $basefile)) {
  echo "File Uploaded";
} else {
  echo "Error";
}

$q = "update users set com_name='$com_name',add_1='$add_1',logo='$basefile',city='$city',state='$state',country='$country',zip='$zip',phone='$phone' ,fax='$fax' ,email='$email' ,website_url='$website_url', com_profile='$com_profile' where com_id='$com_id'";
mysqli_query($cn, $q);
print $q;
