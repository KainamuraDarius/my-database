<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Add more fields as needed
    
    // Validate form data (optional)
    // You can perform validation checks here to ensure that the data is valid
    
    // Connect to your database (replace placeholders with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_library_management_system";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to update user's profile
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=1"; // Replace 'users' with your actual table name and 'id=1' with the condition that identifies the user
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('connected successfully')</script>";
        header("Location: dashboard.html"); 
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    // Close database connection
    
}
?>
