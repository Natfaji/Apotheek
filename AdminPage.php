<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: ../LoginPage.php');
} else {
    if ($_SESSION['user_level'] === 0) {
        header('Location: ../MijnApo.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" type="image/png" href="Assets/LOGO/LOGO.png" />
    <link rel="stylesheet" href="CSS/All.css">
    <link rel="stylesheet" href="CSS/MijnApo.css">
    <script src="JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include 'PHP/Header.php' ?>
    </Header>

    <main>
        <!-- Register -->
        <section>
            <?php require_once 'PHP/messages.php' ?>

        </section>
        <!-- Register -->
        <!-- Login -->
        <section>

        </section>
        <!-- Login -->
    </main>
</body>

</html>