
<?php
$link = mysqli_connect("localhost", "root", "", "societyportal");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$registrationNumber = mysqli_real_escape_string($link, $_REQUEST['registrationNumber']);
$societyName = mysqli_real_escape_string($link, $_REQUEST['societyName']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);



$sql = "INSERT INTO societyentry VALUES ('$societyName', '$registrationNumber', '$address')";

mysqli_query($link, $sql)

    ?>
