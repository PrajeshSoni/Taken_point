
<?php
include("connect.php");
$post_id = $_POST['post_id'];
$con_person = $_POST['con_person'];
$title = $_POST['title'];
$department = $_POST['department'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$edu_level = $_POST['edu_level'];
$job_type = $_POST['job_type'];
$education = $_POST['education'];
$min_salary = $_POST['min_salary'];
$max_salary = $_POST['max_salary'];
$post_date = $_POST['post_date'];
$post_by = $_POST['post_by'];
$job_des = $_POST['job_des'];
$q = "update job_posting set con_person='$con_person',title='$title',department='$department',city='$city',state='$state',country='$country',edu_level='$edu_level',job_type='$job_type',min_salary='$min_salary ',max_salary=' $max_salary ',post_date='$post_date',post_by='$post_by ',job_des=' $job_des 'where post_id='$post_id'";
mysqli_query($cn, $q);
print $q;
header("location:cviewpost.php");
