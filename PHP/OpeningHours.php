<?php
if (isset($_POST["submit"])) {

    //connect to functions.php
    require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/functions.php';

    if (!isset($_SESSION)) {
        session_start();
    }


    //get user data from form
    $OHid1   = $_POST['OHid1'];
    $OHF1   = $_POST['OHF1'];
    $OHT1   = $_POST['OHT1'];
    if (isset($_POST['OHC1'])) {
        $OHC1   = $_POST['OHC1'];
    } else {
        $OHC1   = 0;
    }

    $OHid2   = $_POST['OHid2'];
    $OHF2   = $_POST['OHF2'];
    $OHT2   = $_POST['OHT2'];
    if (isset($_POST['OHC1'])) {
        $OHC2   = $_POST['OHC2'];
    } else {
        $OHC2   = 0;
    }

    $OHid3   = $_POST['OHid3'];
    $OHF3   = $_POST['OHF3'];
    $OHT3   = $_POST['OHT3'];
    if (isset($_POST['OHC1'])) {
        $OHC3   = $_POST['OHC3'];
    } else {
        $OHC3   = 0;
    }

    $OHid4   = $_POST['OHid4'];
    $OHF4   = $_POST['OHF4'];
    $OHT4   = $_POST['OHT4'];
    if (isset($_POST['OHC1'])) {
        $OHC4   = $_POST['OHC4'];
    } else {
        $OHC4   = 0;
    }

    $OHid5   = $_POST['OHid5'];
    $OHF5   = $_POST['OHF5'];
    $OHT5   = $_POST['OHT5'];
    if (isset($_POST['OHC1'])) {
        $OHC5   = $_POST['OHC5'];
    } else {
        $OHC5   = 0;
    }

    $OHid6   = $_POST['OHid6'];
    $OHF6   = $_POST['OHF6'];
    $OHT6   = $_POST['OHT6'];
    if (isset($_POST['OHC1'])) {
        $OHC6   = $_POST['OHC6'];
    } else {
        $OHC6   = 0;
    }

    $OHid7   = $_POST['OHid7'];
    $OHF7   = $_POST['OHF7'];
    $OHT7   = $_POST['OHT7'];
    if (isset($_POST['OHC1'])) {
        $OHC7   = $_POST['OHC7'];
    } else {
        $OHC7   = 0;
    }


    // $OHC    = $_POST['OHC'];

    $DataArray = array([$OHid1, $OHF1, $OHT1, $OHC1], [$OHid2, $OHF2, $OHT2, $OHC2], [$OHid3, $OHF3, $OHT3, $OHC3], [$OHid4, $OHF4, $OHT4, $OHC4], [$OHid5, $OHF5, $OHT5, $OHC5], [$OHid6, $OHF6, $OHT6, $OHC6], [$OHid7, $OHF7, $OHT7, $OHC7]);
    print_r($DataArray);
    exit;
    if (
        empty($$OHF1) ||
        empty($$OHT1) ||
        empty($$OHF2) ||
        empty($$OHT2) ||
        empty($$OHF3) ||
        empty($$OHT3) ||
        empty($$OHF4) ||
        empty($$OHT4) ||
        empty($$OHF5) ||
        empty($$OHT5) ||
        empty($$OHF6) ||
        empty($$OHT6) ||
        empty($$OHF7) ||
        empty($$OHT7)
    ) {
        $_SESSION['messages'][] = ["warning", 'Please fill all required fields!'];
        header('Location: /apo_ahmad/AdminPage/AdminDashboard');
        exit;
    }

    //log user in
    SaveOpeningHours($OHF1, $OHF1, $OHF2, $OHF2, $OHF3, $OHF3, $OHF4, $OHF4, $OHF5, $OHF5, $OHF6, $OHF6, $OHF7, $OHF7);
} else {
    header("Location: /apo_ahmad/MijnApo");
    exit;
}
