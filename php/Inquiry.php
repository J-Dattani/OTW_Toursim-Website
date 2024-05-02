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
    $contact = isset($_POST['contact']) ? $_POST['contact'] : ''; // Check if contact is set, if not, set it to an empty string
    $message = $_POST['message'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO inquiry (name, email, contact, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $contact, $message); // Four placeholders, so "ssss" should be used

    // Execute the statement
    if ($stmt->execute()) {
        // Close the statement and connection
        $stmt->close();
        $conn->close();
        
        // Display JavaScript alert
        echo '<script>alert("Thank you for your response."); window.location.href = "Home.php";</script>';
        exit(); // Ensure that no more code is executed after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
