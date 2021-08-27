<?php
session_start();
if(isset($_REQUEST["submit"])) {
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    require_once "dbConnect.php";
    $queryLogin = "SELECT * FROM tbl_users WHERE email='$email' AND password='$password'";
    $result = $conn -> query($queryLogin);
    if (($result -> num_rows) == 1) {
        $dataSet = $result -> fetch_array(MYSQLI_ASSOC);
        $_SESSION["name"] = $dataSet["name"];
        $_SESSION["role"] = $dataSet["role"];
        header("Location: home.php");
        exit();
    }
    else {
        $_SESSION["loginFail"] = "Invalid username or password!";
        header("Location: login.php");
        exit();
    }
}
mysqli_close($conn);
?>