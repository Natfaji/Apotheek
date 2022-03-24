<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

if (isset($_GET['sortingOrder'])) {
    if ($_GET['sortingOrder'] != 'DESC') {
        $sql = "SELECT * FROM news ORDER BY news_date DESC";
    } else {
        $sql = "SELECT * FROM news ORDER BY news_date ASC";
    }
} else {
    $sql = "SELECT * FROM news ORDER BY news_date DESC";
}

$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {
    echo '
    <a href="' . $data["news_link"] . '">
        <div class="Nieuws">
            <img id="Image" src="/apo_ahmad/Assets/Images/' . $data["news_image"] . '" alt="">
            <h3 class="title">' . $data["news_title"] . '</h3>
            <p class="description">' . $data["news_description"] . '</p>
        </div>
    </a>
    ';
}

// <tr>
//             <td>' . $data["news_id"] . '</td>
//             <td><img   id="Image" src="/apo_ahmad/Assets/Images/' . $data["news_image"] . '" alt=""></td>
//             <td>' . $data["news_title"] . '</td>
//             <td>' . $data["news_description"] . '</td>
//             <td>' . $data["news_link"] . '</td>
//             <td>' . $data["news_date"] . '</td>
//         </tr>