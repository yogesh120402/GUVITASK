<?php

<?php
$servername = "localhost";
$username = "root";
$password = "Yogesh@12345";
$database = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


// Start the session
session_start();

// If the form is submitted
// if (isset($_POST['loginForm'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from MongoDB Users Collection
    $user = $userCollection->findOne(['Firstname' => $username]);
//   echo $username;
//   echo $user;
//   echo $(sha1($password));
//   echo $user['Password'];
    if ($user && password_verify(sha1($password), $user['Password'])) {

        // Create a session
        $_SESSION['username'] = $user['email']; // Assuming 'email' is the field in the MongoDB document

        // Redirect to the profile page
        header('Location: ./profile.html');
        exit();
    } else {
        ?>
        <center><h4 style="color: red;">Invalid Username or Password</h4></center>
        <center><a href="../index.html">Try Again</a></center>
        <?php
    }
//}
?>
