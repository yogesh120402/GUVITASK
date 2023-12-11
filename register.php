<?php
require_once  '../vendor/autoload.php';
$databaseConnection = new MongoDB\Client;
$myDatabase = $databaseConnection->myDB1;
$userCollection = $myDatabase->users;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = sha1($password);
    $data = array(
        "Firstname" => $username,
        "Email" => $email,
        "Password" => $hashed_password
    );
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
