<html lang="en">
<head>
    <title>Flat Buy/Sales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        // if (isset($_GET['message'])) {
        //     if ($_GET['message'] === 'success') {
        //         echo '<div class="alert alert-success">Form submitted successfully!</div>';
        //     } elseif ($_GET['message'] === 'error') {
        //         echo '<div class="alert alert-danger">There was an error saving your data. Please try again.</div>';
        //     }
        // }

        $host = 'localhost'; // Database host
        $user = 'root'; // Database username (default is 'root' for localhost)
        $password = ''; // Database password (leave empty if no password)
        $db = 'web_flatportal'; // Database name
        
        // Create the connection
        $conn = new mysqli($host, $user, $password, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        
        $sql = "SELECT full_name, age, date_of_birth, color, photo, email, phone_number, address FROM info_personal";
        $result = $conn->query($sql);


    ?>

    <h1 class="text-center">Personal Information List</h1>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Color</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Check if there are rows returned by the query
                    if ($result->num_rows > 0) {
                        // Loop through each row and display data
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['full_name'] . "</td>";
                            echo "<td>" . $row['age'] . "</td>";
                            echo "<td>" . $row['date_of_birth'] . "</td>";
                            echo "<td>" . $row['color'] . "</td>";
                            echo "<td>" . ($row['photo'] ? '<img src="' . $row['photo'] . '" alt="photo" width="50">' : 'No Photo') . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['phone_number'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No records found</td></tr>";
                    }
                ?>
            </tbody>
            </table>
    </div>


</body>
</html>
