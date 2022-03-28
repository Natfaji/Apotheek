<?php

//connect to functions.php
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/functions.php';

if (!isset($_SESSION)) {
    session_start();
}

$CurrentDirectory = $_SERVER["DOCUMENT_ROOT"];
$UploadDirectory = '/apo_ahmad/Assets/Images/Medicine/';

$errors = []; // Store errors here

$FileExtensionsAllowed = ['jpeg', 'jpg', 'png']; // These will be the only file extensions allowed 

$FileName = $_FILES['Image_File']['name'];
$NewFileName = str_replace(' ', '_', $FileName);
$FileSize = $_FILES['Image_File']['size'];
$FileTmpName  = $_FILES['Image_File']['tmp_name'];
$FileType = $_FILES['Image_File']['type'];
$FileExtension = pathinfo($NewFileName, PATHINFO_EXTENSION);
$NewsTitle = $_POST['newsTitle'];
$NewsDescription = $_POST['newsDescription'];
$NewsLink = $_POST['newsLink'];
$NewsDate = $_POST['newsDate'];

$UploadPath = $CurrentDirectory . $UploadDirectory . basename($NewFileName);

if (isset($_POST['submit'])) {
    // Validate form inputs Start.
    if (!in_array($FileExtension, $FileExtensionsAllowed)) {
        $errors[] = 'This file extension is not allowed. Please upload a JPEG or PNG file' . $NewFileName;
    }

    if ($FileSize > 4000000) {
        $errors[] = 'File exceeds maximum size (4MB)';
    }

    if (file_exists($UploadPath)) {
        $errors[] = 'A file with this name already exists';
    }

    if (
        empty($NewsTitle) ||
        empty($NewsDescription) ||
        empty($NewsDate)
    ) {
        $errors[] = 'Please fill all required fields!';
    }

    if (filter_var($NewsLink, FILTER_VALIDATE_URL) === false) {
        $errors[] = 'The provided URL is not valid! Make sure that the URL starts with: "http(s)://"';
    }

    if (empty($errors)) {

        if (SendNews($NewFileName, $NewsTitle, $NewsDescription, $NewsLink, $NewsDate)) {
            $DidUpload = move_uploaded_file($FileTmpName, $UploadPath);

            if (!$DidUpload) {
                $_SESSION['messages'][] = ["error", 'An error occurred.'];
                header('Location: /apo_ahmad/AdminPage/AdminNews');
                exit;
            } else {
                $_SESSION['messages'][] = ["success", 'News has been uploaded'];
                header('Location: /apo_ahmad/AdminPage/AdminNews');
                exit;
            }
        } else {
            $_SESSION['messages'][] = ["error", 'An error occurred.'];
            header('Location: /apo_ahmad/AdminPage/AdminNews');
            exit;
        }
    } else {
        $_SESSION['messages'][] = ["error", implode(',<br>', $errors)];
        header('Location: /apo_ahmad/AdminPage/AdminNews');
        exit;
    }
    // Validate form inputs End.
}
