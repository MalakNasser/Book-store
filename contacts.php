<?php
session_start();

if(empty($_POST)){
    echo "Hi";
}else if(isset($_POST["name"]) && isset($_POST["email"])){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "books_store";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];


    $sql = "INSERT INTO contacts (name, email, phone, message)
    VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
    $_SESSION["success"] = "Form submission successful!";
    header("Location: index.php");    
    die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}