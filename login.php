<?php
session_start();
include 'connection.php';
$message = '';

if(isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $message = '<label>All fields are required</label>';
    } else {
        $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $smt = $conn->prepare($query);
        $smt->execute(
            array(
                'username' => $_POST["username"],
                'password' => $_POST["password"]
            )
        );
        $count = $smt->rowCount();
        if($count>0) {
            $_SESSION["username"] = $_POST["username"];
            header("location:admin/index.php");
        } else {
            $message = "<label>Username or password is wrong</label>";
            header("location:login.view.php");
        }
    }
}
$conn = null;
