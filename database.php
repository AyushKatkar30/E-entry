<?php
// Database connection parameters
$servername = "172.25.16.54"; // Replace with your database server address
$username = "localhost"; // Replace with your database username
$password = "root"; // Replace with your database password
$dbname = "App"; // Replace with your database name

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for form data
$serialNumber = $name = $phoneNumber = $address = $email = "";
$errors = array();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $serialNumber = mysqli_real_escape_string($conn, $_POST["serial_number"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    // Basic validation - you can add more validation as needed
    if (empty($serialNumber)) {
        $errors[] = "Serial number is required.";
    }
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($phoneNumber)) {
        $errors[] = "Phone number is required.";
    }
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }

    // If there are no errors, insert data into the database
    if (empty($errors)) {
        $sql = "INSERT INTO entries (serial_number, name, phone_number, address, email)
                VALUES ('$serialNumber', '$name', '$phoneNumber', '$address', '$email')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Entry added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>E-entry Register</title>
</head>
<body>
    <h1>E-entry Register</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Serial Number: <input type="text" name="serial_number" value="<?php echo $serialNumber; ?>"><br>
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
        Phone Number: <input type="text" name="phone_number" value="<?php echo $phoneNumber; ?>"><br>
        Address: <input type="text" name="address" value="<?php echo $address; ?>"><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>
        <input type="submit" value="Add Entry">
    </form>

    <?php
    // Display validation errors, if any
    if (!empty($errors)) {
        echo "<h2>Errors:</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>