<?php $page = 'Medicijnen' ?>

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
    <link rel="stylesheet" href="/CSS/Products.css">
    <link rel="stylesheet" href="/CSS/medicijnen.css">
    <script src="/JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/Header.php' ?>
    </Header>

    <main>
        <section>
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/messages.php' ?>
        </section>

        <section class="page-content">
            <!-- Products -->
            <section class="ProductSection">
                <aside>
                    <div class="Filters_Title">Filters</div>
                    <hr class="hr1">
                    <form action="Medicijnen.php" method="get">
                        <div>
                            <input type="radio" id="A-Z" name="sortingOrder" value="ASC">
                            <label for="A-Z">A-Z</label>
                        </div>
                        <div>
                            <input type="radio" id="Z-A" name="sortingOrder" value="DESC">
                            <label for="Z-A">Z-A</label>
                        </div>
                        <input type="submit" name="Filter" value="Filter">
                    </form>
                </aside>
                <div class="ProductsDIV">
                    <h2 class="ProductsdivTitle">Products</h2>
                    <div class="Product-items">
                        <?php include $_SERVER["DOCUMENT_ROOT"] . '/PHP/inc/Product.php' ?>
                    </div>
                </div>
            </section>
            <!-- Products -->
        </section>
    </main>
</body>

</html>