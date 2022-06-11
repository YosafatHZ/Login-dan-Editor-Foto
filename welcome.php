<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php echo "<center><h1>Selamat Datang " . $_SESSION['username'] . "</h1></center>"; ?>
    <a href="Home.html"><center>Masuk Ke Editor</center> </a>
    <a href="logout.php"><center>Logout</center></a>
</body>
</html>