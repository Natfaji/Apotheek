<?php

if (password_verify($password, $hash)) {
    $_SESSION['messages'][] = '1';
    header('Location: ../MijnApo.php');
    exit;
} else {
    $_SESSION['messages'][] = '2';
    header('Location: ../MijnApo.php');
    exit;
}
