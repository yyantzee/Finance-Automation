<?php

include 'config.php';

$idt = $_GET['id'];
$query_mysql = mysqli_query($conn, "UPDATE contact_form SET status = 'RESOLVED' WHERE id_contact = '$idt'");

if($query_mysql){
    echo "<script>window.location.replace('tables.php'); window.alert('Resolve Successfuly')</script>";
}


?>