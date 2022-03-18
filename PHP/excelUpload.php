<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

//connect to functions.php
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/functions.php';

if (isset($_POST["submit_CSV_file"])) {
    if (isset($_SESSION["first_name"])) {
        if ($_SESSION['user_level'] === 1) {
            importdata();
        } else {
            header('Location: /apo_ahmad/MijnApo');
            exit;
        }
    } else {
        header('Location: /apo_ahmad/LoginPage');
        exit;
    }
} else {
    $_SESSION['messages'][] = ["warning", 'Plase select a file to upload'];
    header('Location: /apo_ahmad/AdminPage/Products');
    exit;
}
