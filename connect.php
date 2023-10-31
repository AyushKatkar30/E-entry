
// $name=$_POST['name'];
// $date=$_POST['date'];
// $day=$_POST['$day'];
// $vehicle=$_POST['Vehicle Number'];
// $phoneNumber=$_POST['$phoneNumber'];
// $address=$_POST['$address'];
// $email=$_POST['E-mail'];
// $Entrytime=$_POST['Entry-time'];
// $office=$_POST['Office-no'];

//  // Database connection 
//  $conn = new mysqli('localhost','root','','registration');
//  if ($conn->connect_error) {
//     die('Connection Failed    :  '   .$conn->connect_error);
//  }else{
//     $stmt = $conn->prepare("insert into officedetails(name, date, day, vehicle, phonenumber, address, email, Entrytime, office)
//           values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("sisiissis", $name, $date, $day, $vehicle, $phoneNumber, $address, $email, $Entrytime, $office);
//     $stmt->execute();
//     echo "registration succesfull....";
//     $stmt->close();
//     $conn->close();
// }

<?php
$link = mysqli_connect("localhost", "root", "", "registration");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$day = mysqli_real_escape_string($link, $_REQUEST['day']);
$vehicle = mysqli_real_escape_string($link, $_REQUEST['vehicle']);
$phoneNumber = mysqli_real_escape_string($link, $_REQUEST['phoneNumber']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$entrytime = mysqli_real_escape_string($link, $_REQUEST['entryTime']);
$office = mysqli_real_escape_string($link, $_REQUEST['officeNumber']);

$sql = "INSERT INTO officedetails VALUES ('$name', '$date', '$day', '$vehicle', '$phoneNumber', '$address', '$email', '$entryTime', '$office')";

mysqli_query($link, $sql)

    ?>