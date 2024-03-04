<?php

include 'config.php';
$query_mysql = mysqli_query($conn, "UPDATE contact_form SET status = 'RESOLVED'");

if($query_mysql){
    echo "<script>window.location.replace('tables.php'); window.alert('Resolved All Successfuly')</script>";
}


?>