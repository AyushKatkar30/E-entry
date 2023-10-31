<!DOCTYPE html>
<html>
<head>
    <title>Office Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            background-color: #f9f9f9;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        label {
            font-weight: bold;
        }
        .display {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button#jumpIn {
            background-color: #28A745;
        }
    </style>
</head>
<body>
    <?php include 'connect3.php';?>
    <div class="container">
        <h1>Office Portal</h1>
        <form id="officeForm">
            <label for="officeName">Office Name:</label>
            <input type="text" id="officeName" name="officeName" required><br>

            <label for="numberAllotted">Number Allotted:</label>
            <input type="text" id="numberAllotted" name="numberAllotted" required><br>

            <label for="registrationNumber">Registration Number:</label>
            <input type="text" id="registrationNumber" name="registrationNumber" required><br>

            <label for="officeAddress">Office Address:</label>
            <input type="text" id="officeAddress" name="officeAddress" required><br>

            <div class="button-container">
                <button type="button" onclick="displayOfficeInfo()">Submit</button>
                <!-- <a href="officeentry.html" class="button">Jump In</a> -->
                <button type="button" id="jumpIn" onclick="displayOfficeInfo1()">Jump In</button>
            </div>
        </form>
        <div class="display" id="displayArea">
            <h2>Office Information</h2>
            <p><strong>Office Name:</strong> <span id="displayOfficeName"></span></p>
            <p><strong>Number Allotted:</strong> <span id="displayNumberAllotted"></span></p>
            <p><strong>Registration Number:</strong> <span id="displayRegistrationNumber"></span></p>
            <p><strong>Office Address:</strong> <span id="displayOfficeAddress"></span></p>
        </div>
    </div>

    <script>
        function displayOfficeInfo() {
            var officeName = document.getElementById("officeName").value;
            var numberAllotted = document.getElementById("numberAllotted").value;
            var registrationNumber = document.getElementById("registrationNumber").value;
            var officeAddress = document.getElementById("officeAddress").value;

            document.getElementById("displayOfficeName").textContent = officeName;
            document.getElementById("displayNumberAllotted").textContent = numberAllotted;
            document.getElementById("displayRegistrationNumber").textContent = registrationNumber;
            document.getElementById("displayOfficeAddress").textContent = officeAddress;


        }

        function displayOfficeInfo1() {
            var officeName = document.getElementById("officeName").value;
            var numberAllotted = document.getElementById("numberAllotted").value;
            var registrationNumber = document.getElementById("registrationNumber").value;
            var officeAddress = document.getElementById("officeAddress").value;

            document.getElementById("displayOfficeName").textContent = officeName;
            document.getElementById("displayNumberAllotted").textContent = numberAllotted;
            document.getElementById("displayRegistrationNumber").textContent = registrationNumber;
            document.getElementById("displayOfficeAddress").textContent = officeAddress;
            window.location.href = "officeentry.html";
            
        }
    </script>
</body>
</html>
