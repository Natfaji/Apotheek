<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: /apo_ahmad/LoginPage');
} else {
    if ($_SESSION['user_level'] === 0) {
        header('Location: /apo_ahmad/MijnApo');
    }
}
$page = 'AdminProducts'
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
    <link rel="stylesheet" href="/apo_ahmad/CSS/Products.css">
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
            <form method="POST" action="/apo_ahmad/PHP/ExcelUpload.php" enctype="multipart/form-data">
                <div>
                    <label>Upload Excel File</label>
                    <input type="file" name="CSV_file">
                </div>
                <div>
                    <button type="submit" name="submit_CSV_file">Upload</button>
                </div>
            </form>

            <!-- Products Start -->
            <section class="ProductSection">
                <h2 class="ProductsTitle">Products</h2>
                <div class="Product-items">
                    <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Product.inc.php' ?>
                </div>
            </section>
            <!-- Products End -->
        </section>
    </main>
</body>

</html>