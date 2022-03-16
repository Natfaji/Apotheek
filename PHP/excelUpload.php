<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/db_connection.php';

//connect to functions.php
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHP/functions.php';

if (isset($_POST["submit_CSV_file"])) {
    if (isset($_SESSION["first_name"])) {
        if ($_SESSION['user_level'] === 1) {
            importdata();
        } else {
            header('Location: /MijnApo');
            exit;
        }
    } else {
        header('Location: /LoginPage');
        exit;
    }
} else {
    $_SESSION['messages'][] = ["warning", 'Plase select a file to upload'];
    header('Location: /AdminPage/Products');
    exit;
}
