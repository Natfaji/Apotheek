<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: /apo_ahmad/LoginPage');
} else {
    if ($_SESSION['user_level'] === 0) {
        header('Location: /apo_ahmad/MijnApo');
    }
}
$page = 'AP_Dashboard'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" type="image/png" href="/apo_ahmad/Assets/LOGO/LOGO.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/apo_ahmad/CSS/All.css">
    <link rel="stylesheet" href="/apo_ahmad/CSS/AdminNavigation.css">
    <script src="/apo_ahmad/JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
    </Header>

    <main>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/SideNav.inc.php' ?>
        <section class="page-content">
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/messages.inc.php' ?>
        </section>
    </main>
</body>

</html>