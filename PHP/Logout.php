<?php
session_start();
session_unset();
$_SESSION['messages'][] = ["succes", 'you have successfully logged out!'];
header('Location: ../MijnApo.php');
exit;
