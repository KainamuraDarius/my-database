<?php
// Database connection
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "school_library_management_system"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If signup form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    // Check if user with the same username or email already exists
    $check_query = "SELECT * FROM users WHERE username = ? OR email = ?";
    $check_stmt = $conn->prepare($check_query);
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    
    if ($result->num_rows > 0) {
        echo "User with the same username or email already exists.";
    } else {
        // Insert new user into the database
        $password=md5($password);
        $insert_query = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";
        $result=$conn->query($insert_query);
        
        if ($result) {
            echo "Signup successful!";
            header("Location: login.html"); 
            exit(); // Ensure script stops execution after redirection
        } else {
            echo "Error: " . $conn->error;
        }
    }
    
   
 
}

// Close connection

?>
