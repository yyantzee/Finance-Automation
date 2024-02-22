<?php

include 'config.php';


if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}


$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone_number = $_POST['phone-number'];
$country = $_POST['country'];
$message = $_POST['message'];

$pn = $country.$phone_number;


$sql = "INSERT INTO contact_form (first_name, last_name, company, email, phone_number, message) VALUES ('$first_name', '$last_name', '$company', '$email', '$pn', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.replace('form.php'); window.alert('Message Successfuly')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
