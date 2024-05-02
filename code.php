<?php
session_start(); //Start Session
require_once 'connect.php'; //include connection string

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //check method = POST
    $username = $_POST['username']; //data from function.js username
    $password = $_POST['password']; //data from function.js password

    $stmt = $conn->prepare("SELECT ID,username,password,name FROM user_tbl WHERE username = :username"); //mysql Query
    $stmt->bindParam(':username', $username); //binding the parameters
    $stmt->execute(); //execute the mysql query

    $result = $stmt->fetch(PDO::FETCH_ASSOC); //stored data from database to variable $result

    if ($result && password_verify($password, $result['password'])) { //verify if input password and password from database are the same
        unset($result['password']); //unset password
        $_SESSION['ID']     = $result['ID']; //save session ID
        $_SESSION['username']   = $result['username']; //save session username
        $_SESSION['name']      = $result['name']; //save session name
        echo 1; //return case success = 1
    } else {
        echo 0; //return case failed = 0
    }
}

?>
