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
    $_SESSION['messages'][] = 'Please fill all required fields!'.openssl_random_pseudo_bytes(1, $cstrong);
    header('Location: ../MijnApo.php');
    exit;
}

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $_SESSION['messages'][] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    header('Location: ../MijnApo.php');
    exit;
}

//check if passwords match
if ($password !== $password_confirm) {
    $_SESSION['messages'][] = 'Password and Confirm password should match!';
    header('Location: ../MijnApo.php');
    exit;
}

//check if email exists
$namecheckquery = "SELECT email FROM users WHERE email = '$email'";
$namecheck = mysqli_query($conn, $namecheckquery);
$result = mysqli_num_rows($namecheck);

if ($result) {
    $_SESSION['messages'][] = 'email used';
    header('Location: ../MijnApo.php');
    exit;
}

if (!$result) {
    $_SESSION['messages'][] = 'email not used';
    header('Location: ../MijnApo.php');
    exit;
}


$randomSalt = "abcdef";

$preSalt = substr($randomSalt, 0,3); // abc
$postSalt = substr($randomSalt, 3,3);  // def

$password = md5(md5($preSalt.$teacherpassword.$postSalt));

/*
//add user to the table
$salt = "\$5\$rounds=5000\$" . "fuck" . $username . "\$";
$hash = crypt($password, $salt);
$insertuserquery = "INSERT INTO user_credentials (User_Name, hash, salt) VALUES ('" . $username . "', '" . $hash . "', '" . $salt . "');";
mysqli_query($con, $insertuserquery) or die("4: Insert player query failed"); //error code #4 - insert query failed

echo ("0");
*/