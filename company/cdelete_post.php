<?php
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $qd = "delete from schedule where post_id='$post_id'";
    mysqli_query($cn, $qd);
}
