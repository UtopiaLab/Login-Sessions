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
    <h2>USER LOGIN</h2>
<?php
if (isset($_SESSION["loginFail"])) {
    echo "<div class=error>" . $_SESSION["loginFail"] . "</div>";
    session_destroy();
}
if (isset($_SESSION["signupSuccess"])) {
    echo "<div class=success>" . $_SESSION["signupSuccess"] . "</div>";
    session_destroy();
}
?>
    <form method="post" action="login_validate.php">
        <label>E-mail:<br/>
        <input type="text" name="email" required></label><br/><br/>
        <label>Password:<br/>
        <input type="password" name="password" required></label><br/><br/>
        <input type="submit" name="submit" value="Login">
        <input type="reset" name="reset" value="Reset">
    </form>
<p>New to here? <a href="login.php">Click here</a> to create an account!</p>
</body>
</html>