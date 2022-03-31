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
    $sql = "SELECT * FROM news ORDER BY news_id DESC";
}

$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {
    echo '
        <form action="/apo_ahmad/PHP/RemoveNews.php" method="post">
            <tr>
                <td class="news_Id">' . $data["news_id"] . '</td>
                <td><img id="Image" src="/apo_ahmad/Assets/Images/Medicine/' . $data["news_image"] . '" alt="">
                <td>' . $data["news_title"] . '</td>
                <td>' . $data["news_description"] . '</td>
                <td>' . $data["news_link"] . '</td>
                <td>' . $data["news_date"] . '</td>
                <td><input type="submit" name="delete" value="Delete"></td>
                <input type="hidden" name="id" value="' . $data["news_id"] . '">
                <input type="hidden" name="image" value="' . $data["news_image"] . '">
            </tr>
        </form>
    ';
}
