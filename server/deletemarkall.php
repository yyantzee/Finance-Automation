<?php

include 'config.php';
$query_mysql = mysqli_query($conn, "DELETE FROM contact_form");

if($query_mysql){
    echo "<script>window.location.replace('resolved.php'); window.alert('Delete All Successfuly')</script>";
}


?>