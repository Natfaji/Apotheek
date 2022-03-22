<?php $page = 'Medicijnen' ?>

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
    <link rel="stylesheet" href="/apo_ahmad/CSS/Products.css">
    <link rel="stylesheet" href="/apo_ahmad/CSS/medicijnen.css">
    <script src="/apo_ahmad/JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
    </Header>

    <main>
        <section>
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/messages.inc.php' ?>
        </section>

        <section class="page-content">
            <!-- Products Start -->
            <section class="ProductSection">
                <aside>
                    <div class="Filters_Title">Filters</div>
                    <hr class="hr1">
                    <form action="medicijnen" method="get">
                        <dl>
                            <dt>sortingOrder</dt>
                            <dd>
                                <div>
                                    <input type="radio" id="A-Z" name="sortingOrder" value="ASC">
                                    <label for="A-Z">A-Z</label>
                                </div>
                                <div>
                                    <input type="radio" id="Z-A" name="sortingOrder" value="DESC">
                                    <label for="Z-A">Z-A</label>
                                </div>
                            </dd>
                        </dl>
                        <button type="submit" name="Filter"><span class="material-icons" id="btnlanguage">filter_alt</span>Filter</button>
                    </form>
                </aside>
                <div class="ProductsDIV">
                    <h2 class="ProductsdivTitle">Products</h2>
                    <div class="Product-items">
                        <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Product.inc.php' ?>
                    </div>
                </div>
            </section>
            <!-- Products End -->
        </section>
    </main>
</body>

</html>