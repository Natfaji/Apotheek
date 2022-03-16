<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: /LoginPage');
} else {
    if ($_SESSION['user_level'] === 0) {
        header('Location: /MijnApo');
    }
}
$page = 'Dashboard'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" type="image/png" href="/Assets/LOGO/LOGO.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/All.css">
    <link rel="stylesheet" href="/CSS/AdminNavigation.css">
    <script src="/JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/Header.inc.php' ?>
    </Header>

    <main>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/messages.inc.php' ?>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/SideNav.inc.php' ?>
        
    </main>
</body>

</html>