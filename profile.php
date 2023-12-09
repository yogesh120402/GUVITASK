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
echo $_POST['dob'];

    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];

    $data = array(
        "Age" => $age,
        "Dob" => $dob,
        "Contact" => $contact
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
