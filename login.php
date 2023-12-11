<?php
require_once '../vendor/autoload.php';
$databaseConnection = new MongoDB\Client;
$myDatabase = $databaseConnection->myDB1;
$userCollection = $myDatabase->users;
session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $userCollection->findOne(['Firstname' => $username]);
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
?>
