<?php

// This pulls the MongoDB driver from the vendor folder
require_once  '../vendor/autoload.php';
//echo "hello";
// Connect to MongoDB Database
$databaseConnection = new MongoDB\Client;

// Connecting to a specific database in MongoDB
$myDatabase = $databaseConnection->myDB1;

// Connecting to our MongoDB Collections
$userCollection = $myDatabase->users;
//echo $_POST['email'];


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
