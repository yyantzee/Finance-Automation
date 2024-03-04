<?php

include 'config.php';

$idt = $_GET['id'];
$query_mysql = mysqli_query($conn, "DELETE FROM contact_form WHERE id_contact = '$idt'");

if($query_mysql){
    echo "<script>window.location.replace('Resolved.php'); window.alert('Delete Successfuly')</script>";
}


?>