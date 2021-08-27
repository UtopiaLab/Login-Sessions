<?php
session_start();
if(isset($_REQUEST["submit"])) {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $re_password = $_REQUEST["re-password"];
    $role = $_REQUEST["role"];
    if ($password != $re_password) {
        $_SESSION["passMatch"] = "Password is not matching!";
        header("Location: signup.php");
    }
    require_once "dbConnect.php";
    $queryEmailCheck = "SELECT * FROM tbl_users WHERE email='$email'";
    $result = $conn->query($queryEmailCheck);
    if (($result -> num_rows) == 1) {
        $_SESSION["emailExist"] = "E-mail address is already exist!";
        header("Location: signup.php");
        exit();
    }
    $querySignupSave = "INSERT INTO tbl_users (email, name, password, role) VALUES ('$email', '$name', '$password', '$role')";
    if ($conn -> query($querySignupSave) == TRUE) {
        $_SESSION["signupSuccess"] = "Account created successfully. You can login here now!";
        header("Location: login.php");
        exit();
    }
    else {
        $_SESSION["signupFail"] = "Account creation failed!";
        header("Location: signup.php");
        exit();
    }
}
mysqli_close($conn);
?>