<?php
if (isset($_POST["submit"])) {

    //start database connection
    require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

    //connect to functions.php
    require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/functions.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    //get user data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    if (
        empty($name) ||
        empty($email) ||
        empty($Subject) ||
        empty($Message)
    ) {
        $_SESSION['messages'][] = ["warning", 'Please fill all required fields!'];
        header('Location: /apo_ahmad/Contact.php');
        exit;
    }

    //log user in
    sendForm($name, $email, $Subject, $Message);

    //end database connection
    mysqli_close($conn);
} else {
    header("Location: /apo_ahmad/Contact.php");
    exit;
}
