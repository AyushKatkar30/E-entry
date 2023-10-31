<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label, input {
            display: block;
            margin: 10px 0;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #555;
        }

        .user-info {
            margin-top: 20px;
        }

        .jump-in-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>User Portal</h1>
    </header>
    <div class="container">
        <form id="userForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="number">Number:</label>
            <input type="text" id="number" name="number" required>
            
            <label for="vehicleNo">Vehicle No.:</label>
            <input type="text" id="vehicleNo" name="vehicleNo" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <div class="button-container">
                <button type="button" onclick="submitForm()">Submit</button>
                <button class="jump-in-button" onclick="jumpIn()">Jump In</button>
            </div>
        </form>
        <div class="user-info" id="userInfo">
            <!-- User information will be displayed here -->
        </div>
    </div>

    <script>
        function submitForm() {
            const name = document.getElementById("name").value;
            const number = document.getElementById("number").value;
            const vehicleNo = document.getElementById("vehicleNo").value;
            const address = document.getElementById("address").value;

            const userInfo = document.getElementById("userInfo");
            userInfo.innerHTML = `
                <h2>User Information:</h2>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Number:</strong> ${number}</p>
                <p><strong>Vehicle No.:</strong> ${vehicleNo}</p>
                <p><strong>Address:</strong> ${address}</p>
            `;
        }

        function jumpIn() {
            // Add your jump in functionality here
            alert("Jumping in!");
        }
    </script>
</body>
</html>


