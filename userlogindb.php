<?php
session_start();
include 'dbcon.php';

if (isset($_POST['login-submit'])) {
    $email = stripslashes( htmlspecialchars($_POST["email"]));
    $password =stripslashes( htmlspecialchars($_POST["password"]));

    $stmt = "SELECT * FROM movie WHERE email='{$email}'";
    $result = $conn->query($stmt);
    if (mysqli_num_rows($result) > 0) {
        $users = mysqli_fetch_assoc($result);
        $pass=$users["passwords"];
        if (password_verify($password,$pass)) {
            header('Location:moviebookingpage.php');
        } else {
            $_SESSION['status'] = "Wrong password or username\n".$users['passwords'];
            header('Location:userlogin.php');
        }

    } else {
        $_SESSION['status'] = "Wrong password or username";
        header('Location:userlogin.php');
    }
}
?>