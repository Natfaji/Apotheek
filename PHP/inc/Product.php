<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/db_connection.php';

$sql = "SELECT * FROM medicijnen ORDER BY medicijnen_id ASC";
$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {
    echo '
    <!--Product one -->
    <div class="Product">
        <div class="Product-content">
            <div class="Product-image">
                <img src="/Assets/Images/5.jpg" alt="">
            </div>
        </div>
        <div class="Product-info">
            <a href="#" class="Product-name">' . $data["medicijnen_name"] . '</a>
            <p>€ ' . $data["medicijnen_price"] . '</p>
        </div>
        <div class="Product-content">
            <div class="Product-btns">
                <button type="button" class="btn-cart">Add to cart</button>
            </div>
        </div>
    </div>
    <!--Product one -->';
}
