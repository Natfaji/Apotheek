<?php
if (isset($_POST["submit"])) {

    //connect to functions.php
    require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/functions.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    $array = $_POST['1'];
    // print_r($array);
    // echo '<br>';
    // echo $contains_empty = count($array) != count(array_filter($array, "strlen"));
    exit;

    if ($contains_empty = count($array) != count(array_filter($array, "strlen"))) {
        $_SESSION['messages'][] = ["warning", 'Please fill all required fields!'];
        header('Location: /apo_ahmad/AdminPage/AdminDashboard');
        exit;
    }

    SaveOpeningHours($array);
} else {
    header("Location: /apo_ahmad/MijnApo");
    exit;
}
