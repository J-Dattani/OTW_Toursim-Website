<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database
    $servername = "localhost"; // Change this to your MySQL servername
    $username = "root"; // Change this to your MySQL username
    $password = ""; // Change this to your MySQL password
    $dbname = "your_database_name"; // Change this to your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Set parameters
$name = $_POST['name'];
$email = $_POST['email'];
$tour = $_POST['tour'];
$days = $_POST['days'];
$date = $_POST['date'];
$adults = $_POST['A_members'];
$children = $_POST['C_members'];
$extra_members = $_POST['E_members'];
$package = $_POST['Package'];

// Check if contact is set, if not, set it to an empty string
$contact = isset($_POST['contact']) ? $_POST['contact'] : '';

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO bookings (name, contact, email, tour, days, date, adults, children, extra_members, package) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssiiis", $name, $contact, $email, $tour, $days, $date, $adults, $children, $extra_members, $package);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: Home.php");
        exit(); // Ensure that no more code is executed after redirection

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
