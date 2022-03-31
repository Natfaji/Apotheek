<?php
if (isset($_POST["submit"])) {

    //connect to functions.php
    require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/functions.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    //get user data from form
    $OHFMonday = $_POST['OHFMonday'];
    $OHTMonday = $_POST['OHTMonday'];
    $OHFTuesday = $_POST['OHFTuesday'];
    $OHTTuesday = $_POST['OHTTuesday'];
    $OHFWednesday = $_POST['OHFWednesday'];
    $OHTWednesday = $_POST['OHTWednesday'];
    $OHFThursday = $_POST['OHFThursday'];
    $OHTThursday = $_POST['OHTThursday'];
    $OHFFriday = $_POST['OHFFriday'];
    $OHTFriday = $_POST['OHTFriday'];
    $OHFSaturday = $_POST['OHFSaturday'];
    $OHTSaturday = $_POST['OHTSaturday'];
    $OHFSunday = $_POST['OHFSunday'];
    $OHTSunday = $_POST['OHTSunday'];

    if (
        empty($OHFMonday) ||
        empty($OHTMonday) ||
        empty($OHFTuesday) ||
        empty($OHTTuesday) ||
        empty($OHFWednesday) ||
        empty($OHTWednesday) ||
        empty($OHFThursday) ||
        empty($OHTThursday) ||
        empty($OHFFriday) ||
        empty($OHTFriday) ||
        empty($OHFSaturday) ||
        empty($OHTSaturday) ||
        empty($OHFSunday) ||
        empty($OHTSunday)
    ) {
        $_SESSION['messages'][] = ["warning", 'Please fill all required fields!'];
        header('Location: /apo_ahmad/AdminPage/AdminDashboard');
        exit;
    }

    //log user in
    SaveOpeningHours();
} else {
    header("Location: /apo_ahmad/MijnApo");
    exit;
}
