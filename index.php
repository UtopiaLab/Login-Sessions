<?php
session_start();
?>
<html lang="en">
<head>
    <title>G H O S T</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
<h1>. . . G H O S T . . .</h1>
<div class="main-image"></div>
<h2>WELCOME!</h2>
<?php
if (isset($_SESSION["logoutSuccess"])) {
    echo "<div class=success>" . $_SESSION["logoutSuccess"] . "</div>";
    session_destroy();
}
if (isset($_SESSION["noLogin"])) {
    echo "<div class=error>" . $_SESSION["noLogin"] . "</div>";
    session_destroy();
}
?>
<p>Please <a href="login.php">Login</a> or <a href="signup.php">Signup</a> to continue!</p>
</body>
</html>