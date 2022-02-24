<?php
require_once 'db_connection.php';

session_start();

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

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

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

//check if email exists
$namecheckquery = "SELECT email FROM users WHERE email = '$email'";
$namecheck = mysqli_query($conn, $namecheckquery);
$result = mysqli_num_rows($namecheck);

if (!$result) {
    $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    mysqli_query($conn, "INSERT INTO users VALUES (
        '','$firstname','$infixes','$lastname','$email','$hash','',current_timestamp(),''
        )");
} else {
    $_SESSION['messages'][] = ["warning", 'email used'];
    header('Location: ../MijnApo.php');
    exit;
}