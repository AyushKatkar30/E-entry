
<?php
$link = mysqli_connect("localhost", "root", "", "office");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$officeName = mysqli_real_escape_string($link, $_REQUEST['officeName']);
$numberAllotted = mysqli_real_escape_string($link, $_REQUEST['numberAllotted']);
$registrationNumber = mysqli_real_escape_string($link, $_REQUEST['registrationNumber']);
$officeAddress = mysqli_real_escape_string($link, $_REQUEST['officeAddress']);



$sql = "INSERT INTO officeportal VALUES ('$officeName', '$numberAllotted', '$registrationNumber', '$officeAddress')";

mysqli_query($link, $sql)

    ?>
