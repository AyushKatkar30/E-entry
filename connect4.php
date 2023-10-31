
// $link = mysqli_connect("localhost", "root", "", "firstpage");

// if ($link === false) {
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

// $name = mysqli_real_escape_string($link, $_REQUEST['name']);
// $number = mysqli_real_escape_string($link, $_REQUEST['number']);
// $vehicleNo = mysqli_real_escape_string($link, $_REQUEST['vehicleNo']);
// $address = mysqli_real_escape_string($link, $_REQUEST['address']);



// $sql = "INSERT INTO userportal('name','number','vehicleNo','address') VALUES ('$name', '$number', '$vehicleNo','$address')";

// mysqli_query($link, $sql)


<?php
$link = mysqli_connect("localhost", "root", "", "firstpage");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_POST['name']);
$number = mysqli_real_escape_string($link, $_POST['number']);
$vehicleNo = mysqli_real_escape_string($link, $_POST['vehicleNo']);
$address = mysqli_real_escape_string($link, $_POST['address']);

$sql = "INSERT INTO userportal (name, number, vehicleNo, address) VALUES ('$name', '$number', '$vehicleNo', '$address')";

if (mysqli_query($link, $sql)) {
    echo "Record inserted successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>

