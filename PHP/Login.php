<?php
if (isset($_POST["submit"])) {

    //start database connection
    require_once 'db_connection.php';

    //connect to functions.php
    require_once 'functions.php';

    session_start();

    //get user data from form
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (
        empty($email) ||
        empty($password)
    ) {
        $_SESSION['messages'][] = ["warning", 'Please fill all required fields!'];
        header('Location: ../MijnApo.php');
        exit;
    }

    //log user in
    loginUser($conn, $email, $password);

    //end database connection
    mysqli_close($conn);
} else {
    header("Location: ../MijnApo.php");
    exit;
}
