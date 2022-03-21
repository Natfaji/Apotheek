<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

if (isset($_GET['sortingOrder'])) {
    if ($_GET['sortingOrder'] != 'DESC') {
        $sql = "SELECT * FROM messages ORDER BY messages_date DESC";
    } else {
        $sql = "SELECT * FROM messages ORDER BY messages_date ASC";
    }
} else {
    $sql = "SELECT * FROM messages ORDER BY messages_date DESC";
}

$results = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($results)) {
    echo '
        <tr>
            <td>' . $data["messages_id"] . '</td>
            <td>' . $data["messages_name"] . '</td>
            <td>' . $data["messages_email"] . '</td>
            <td>' . $data["messages_subject"] . '</td>
            <td>' . $data["messages_message"] . '</td>
            <td>' . $data["messages_date"] . '</td>
        </tr>
    ';
}
