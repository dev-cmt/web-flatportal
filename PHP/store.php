<?php
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

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $full_name = $_POST['full_name'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $color = $_POST['color'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO info_personal (full_name, age, date_of_birth, color, photo, email, phone_number, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissssss", $full_name, $age, $dob, $color, $photo, $email, $phone_number, $address);

        if ($stmt->execute()) {
            // Redirect to index.php with a success message
            header("Location: info_list.php?message=success");
            exit();
        } else {
            // Redirect to index.php with an error message
            header("Location: info_list.php?message=error");
            exit();
        }

        $stmt->close();
    }
    $conn->close();

?>