<?php
if (!isset($_SESSION)) {
    session_start();
}
session_unset();
$_SESSION['messages'][] = ["success", 'you have successfully logged out!'];
header('Location: /apo_ahmad/MijnApo');
exit;
