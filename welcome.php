<!-- test class --->
<?php 

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/menuStyles.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/indexStyles.css" rel="stylesheet" />
    <title>Croix Verte</title>
    <title>Welcome</title>
</head>
<body>
    <?php include 'menuWelcome.php';?>

    <?php echo "<h1> Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>