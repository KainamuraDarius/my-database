<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <header>
        <!-- Header content: Logo and Navigation Menu -->
        <div class="logo">
            <img src="download.png" alt="School/Library Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Catalog</a></li>
                <li><a href="#">Borrowed Books</a></li>
                <li><a href="account.html">Account</a></li>
            </ul>
        </nav>
    </header>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
}
$username=$_SESSION['username'];
$email=$_SESSION['email'];
?>
    <main>
        <!-- Welcome Message -->
        <section class="welcome">
            
            <h2>Welcome back, <?php
            echo isset($_SESSION['username'])? $_SESSION['username']:'Not Available'
            ?></h2>
        </section>

        <!-- Search Bar -->
        <section class="search">
            <input type="text" placeholder="Search for books...">
            <button type="button">Search</button>
        </section>

        <!-- Featured Books -->
        <section class="featured">
            <!-- Featured books will be dynamically populated here -->
        </section>

        <!-- Quick Links -->
        <section class="quick-links">
            <button type="button">Borrowed Books</button>
            <button type="button">Reserve a Book</button>
            <button type="button">Renew Books</button>
        </section>

        <!-- Book Categories -->
        <section class="categories">
            <button type="button">Fiction</button>
            <button type="button">Non-fiction</button>
            <!-- Add more category buttons as needed -->
        </section>

        <!-- User Profile -->
        <section class="profile">
            <h3>User Profile</h3>
            <p>Name:  <?php
            echo isset($_SESSION['username'])? $_SESSION['username']:'Not Available'
            ?></p>
            <p>Student email:  <?php
            echo isset($_SESSION['email'])? $_SESSION['email']:'Not Available'
            ?></p>
            <!-- Add more profile information -->
            <button type="button">Edit Profile</button>
            <button type="button">Change Password</button>
            <button type="button"> <a href="login.html"></a>Log Out</button>
        </section>

        <!-- Notifications -->
        <section class="notifications">
            <h3>Notifications</h3>
            <!-- Notifications will be dynamically populated here -->
        </section>
    </main>

    <footer>
        <!-- Footer content: Contact information, links, etc. -->
    </footer>
</body>
</html>
