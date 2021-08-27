<?php
session_start();
?>
<html lang="en">
<head>
    <title>G H O S T</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body style="margin-top: 50px;">
<h1>. . . G H O S T . . .</h1>
<div class="main-image"></div>
<h2>USER SIGNUP</h2>
<?php
if (isset($_SESSION["passMatch"])) {
    echo "<div class=error>" . $_SESSION["passMatch"] . "</div>";
    session_destroy();
}
if (isset($_SESSION["signupFail"])) {
    echo "<div class=error>" . $_SESSION["signupFail"] . "</div>";
    session_destroy();
}
?>
<form method="post" action="signup_validate.php">
    <label>Name:<br/>
        <input type="text" name="name" required></label><br/><br/>
    <label>E-mail:<br/>
        <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></label><br/><br/>
    <label>Password:<br/>
        <input type="password" name="password" pattern=".{8,}" title="Password must contain eight or more characters." required></label><br/><br/>
    <label>Retype Password:<br/>
        <input type="password" name="re-password" required></label><br/><br/>
    <label>Choose a Role:<br/>
    <select name="role" id="role" required>
        <option disabled selected value>Choose...</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Student">Student</option>
    </select></label><br/><br/>
    <input type="submit" name="submit" value="Signup" >
    <input type="reset" name="reset" value="Reset">
</form>
<p>Already have an account? <a href="signup.php">Click here</a> to Login!</p>
</body>
</html>