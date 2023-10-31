<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Entry Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>E-Entry Register</h1>
    </header>
    <main>
        <?php include 'connect2.php';?>
        <div class="entry-form">
            <h2>New Entry</h2>
            <form id="entry-form">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                
                <label for="day">Day:</label>
                <input type="text" id="day" name="day" required>
                
                <label for="vehicle">Vehicle Number:</label>
                <input type="text" id="vehicle" name="vehicle" required>
                
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="entry-time">Entry Time:</label>
                <input type="time" id="entrytime" name="entrytime"required>

                <label for="flat-no">Flat/Bungalow Number:</label>
                <input type="text" id="flatNumber" name="flatNumber"required>
                
                <button type="submit">Add Entry</button>
            </form>
        </div>

        <div class="entry-list">
            <h2>Entry List</h2>
            <table id="entry-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Vehicle Number</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Entry Time</th>
                        <th>Flat/Bungalow Number</th>
                    </tr>
                </thead>
                <tbody id="entry-list"></tbody>
            </table>
        </div>
    </main>
    
    <script src="script.js"></script>
</body>
</html>
