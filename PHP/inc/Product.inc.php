<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

if (isset($_GET['sortingOrder'])) {
    if ($_GET['sortingOrder'] != 'DESC') {
        $sql = "SELECT * FROM medicijnen ORDER BY medicijnen_id ASC";
    } else {
        $sql = "SELECT * FROM medicijnen ORDER BY medicijnen_id DESC";
    }
} else {
    $sql = "SELECT * FROM medicijnen ORDER BY medicijnen_id ASC";
}

$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {

    if ($data["product_obtainability"] == 0) {
        $disabled = "disabled";
        $disabledTXT = "<span>This product is only Avilable in shop</span>";
    } else {
        $disabled = "";
        $disabledTXT = "";
    }
    echo '
    <!--Product one -->
    <div class="Product">
        <div class="Product-content">
            <div class="Product-image">
                <a href="product?p_id=' . $data["medicijnen_id"] . '">
                    <img src="/apo_ahmad/Assets/Images/5.jpg" alt="" href="jij">
                </a>
            </div>
        </div>
        <div class="Product-info">
            <a href="#" class="Product-name">' . $data["medicijnen_name"] . '</a>
            <p>€ ' . $data["medicijnen_price"] . '</p>
        </div>
        <div class="Product-content">
            <div class="Product-btns">
                <button type="button" class="btn-cart" ' . $disabled . '>Add to cart</button>
            </div>
        </div>
        ' . $disabledTXT . '
    </div>
    <!--Product one -->';
}
