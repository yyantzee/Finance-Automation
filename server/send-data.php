<?php

include 'config.php';

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, [
    'secret' => '6Ld05HwpAAAAAC2AJd2d7aUWzj4O_eodBQdbKihu',
    'response' => $_POST['g-recaptcha-response'],
]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$result = json_decode($response);

if ($result->success) {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone-number'];
    $country = $_POST['country'];
    $message = $_POST['message'];
    $ip = $_POST['ip'];

    $pn = $country . $phone_number;


    $sql = "INSERT INTO contact_form (ip_address,first_name, last_name, company, email, phone_number, message) VALUES ('$ip','$first_name', '$last_name', '$company', '$email', '$pn', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.replace('form.php'); window.alert('Message Successfuly')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    return;
} else {
    echo "<script>window.location.replace('form.php'); window.alert('You are robot')</script>";
}

$conn->close();
