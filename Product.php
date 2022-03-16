<?php
$page = 'Medicijnen';
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/functions.php';
$products = get_Products();
$results = mysqli_fetch_assoc($products)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $results['medicijnen_name'] ?></title>
    <link rel="icon" type="image/png" href="/Assets/LOGO/LOGO.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/All.css">
    <link rel="stylesheet" href="/CSS/Products.css">
    <link rel="stylesheet" href="/CSS/Product.css">
    <link rel="stylesheet" href="/CSS/medicijnen.css">
    <script src="/JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/Header.inc.php' ?>
    </Header>

    <main>
        <section>
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/messages.inc.php' ?>
        </section>

        <section class="page-content">
            <!-- Products -->
            <section class="mainSection">
                <div class="productName">
                    <h1><?php echo $results['medicijnen_name'] ?></h1>
                </div>
                <div class="productContent">
                    <div class="productImage">
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <img src="" alt="">
                            <img src="" alt="">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="productInfo">
                        <p><?php echo $results['medicijnen_description'] ?></p>
                    </div>
                </div>
            </section>
            <!-- Products -->
        </section>
    </main>
</body>

</html>