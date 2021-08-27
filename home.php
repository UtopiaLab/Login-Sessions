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
<h2>DASHBOARD</h2>
<?php
if (isset($_SESSION["name"]) and isset($_SESSION["role"])) {
    echo "<div class=dashText> Welcome " . $_SESSION["name"] . "! Your are a(an) " . $_SESSION["role"] . ".</div><br/>";

    echo "<div class=success>";
    if(isset($_SESSION["role"]) == "Administrator") {
        echo "You have full permissions site wide! <br/><br/>";
    }
    elseif(isset($_SESSION["role"]) == "Lecturer") {
        echo "You have permissions for viewing and editing! <br/><br/>";
    }
    else {
        echo "You have permissions for viewing only! <br/><br/>";
    }
    echo "</div>";
}
else {
    $_SESSION["noLogin"] = "You are not logged in!";
    header("Location: index.php");
    exit();
}
?>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>