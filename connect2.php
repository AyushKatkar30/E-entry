<?php
$link = mysqli_connect("localhost", "root", "", "registration");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$day = mysqli_real_escape_string($link, $_REQUEST['day']);
$vehicle = mysqli_real_escape_string($link, $_REQUEST['vehicle']);
$phoneNumber = mysqli_real_escape_string($link, $_REQUEST['phone']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$entrytime = mysqli_real_escape_string($link, $_REQUEST['entrytime']);
$flatNumber= mysqli_real_escape_string($link, $_REQUEST['flatNumber']);

$sql = "INSERT INTO newentry VALUES ('$name', '$date', '$day', '$vehicle', '$phone', '$address', '$email', '$entrytime', '$flatNumber')";

mysqli_query($link, $sql)

    ?>