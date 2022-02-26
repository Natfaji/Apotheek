<?php
if (isset($_POST["submit"])) {

    //start database connection
    require_once 'db_connection.php';

    //connect to functions.php
    require_once 'functions.php';

    session_start();

    //get user data from form
    $firstname = $_POST['firstname'];
    $infixes = $_POST['infixes'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    //check if all fields are filled
    if (
        empty($firstname) ||
        empty($lastname) ||
        empty($email) ||
        empty($password) ||
        empty($password_confirm)
    ) {
        $_SESSION['messages'][] = ["warning", 'Please fill all required fields!'];
        header('Location: ../MijnApo.php');
        exit;
    }

    //password requirements
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    // Validate password strength
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $_SESSION['messages'][] = ["warning", 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'];
        header('Location: ../MijnApo.php');
        exit;
    }

    //check if passwords match
    if ($password !== $password_confirm) {
        $_SESSION['messages'][] = ["warning", 'Password and Confirm password should match!'];
        header('Location: ../MijnApo.php');
        exit;
    }

    if (uidExists($conn, $email) !== false) {
        //email is already in use
        $_SESSION['messages'][] = ["warning", 'email used'];
        header('Location: ../MijnApo.php');
        exit;
    }

    createuser($conn, $firstname, $infixes, $lastname, $email, $password);

    //end database connection
    mysqli_close($conn);
} else {
    header("Location: ../MijnApo.php");
    exit;
}
