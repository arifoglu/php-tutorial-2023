<?php session_start();

if(empty($_SESSION["id"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>

    <a href="logout process.php">
        <div style="float:right"><button>logout</button></div>
    </a>

    <h1>Welcome to home page...!</h1>

</body>
</html>