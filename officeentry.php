<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Entry Register</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <header>
        <h1>E-Entry Register</h1>
    </header>
    
    <main>
        
        <?php include 'connect1.php';?>
        <div class="entry-form">
            <form action="connect.php" method="post">   
            <form id="entry-form">
                <label for="Name">name:</label>
                <input type="text" id="name" required name="name">
                <label for="date">date:</label>
                <input type="date" id="date" required name="date">
                
                <label for="day">Day:</label>
                <input type="text" id="day" required name="day">
                
                <label for="vehicle">Vehicle Number:</label>
                <input type="text" id="vehicle" required name="vehicle">
            
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phoneNumber" required name="phoneNumber">
                
                <label for="address">Address:</label>
                <input type="text" id="address" required name="address">
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" required name="email">

                <label for="entry-time">Entry Time:</label>
                <input type="time" id="entryTime" required name="entryTime">

                <label for="office-no">Visiting Office Number:</label>
                <input type="text" id="officeNumber" required name="officeNumber">
                
                <button type="submit">Add Entry</button>
            </form>
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
                        <th>name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>e-mail</th>
                        <th>entryTime</th>
                        <th>officeNumber</th>
                    </tr>
                </thead>
                <tbody id="entry-list"></tbody>
            </table>
        </div>
    </main>
    
    <script src="script2.js"></script>
</body>
</html>

