<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

if (!isset($_SESSION)) {
    session_start();
}

$id = $_POST['id'];
$Image = $_POST['image'];

$sql = "DELETE FROM news WHERE news_id = $id";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    $_SESSION['messages'][] = ["error", 'Error unkown #004'];
    header('Location: /apo_ahmad/AdminPage/AdminNews');
    exit;
}

$DeletedFile = unlink($_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/Assets/Images/Medicine/' . $Image . '');

if (!$DeletedFile) {
    $_SESSION['messages'][] = ["error", 'Image not deleted'];
    header('Location: /apo_ahmad/AdminPage/AdminNews');
    exit;
}

mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);



$_SESSION['messages'][] = ["success", 'News successfuly removed'];
header('Location: /apo_ahmad/AdminPage/AdminNews');
exit;
