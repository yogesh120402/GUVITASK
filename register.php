<?php

<?php
$servername = "localhost";
$username = "root"
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


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = sha1($password);

    $data = array(
        "Firstname" => $username,
        "Email" => $email,
        "Password" => $hashed_password
    );

    // Insert into MongoDB Users Collection
    $insert = $userCollection->insertOne($data);

    if($insert){
        ?>
        <center><h4 style="color: green;">Successfully Registered</h4></center>
        <center><a href="index.html">Login</a></center>
        <?php
    } else {
        ?>
        <center><h4 style="color: red;">Registration Failed</h4></center>
        <center><a href="signup.html">Try Again</a></center>
        <?php
    }


?>
