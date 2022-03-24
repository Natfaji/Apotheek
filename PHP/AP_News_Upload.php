<?php
if (!isset($_SESSION)) {
    session_start();
}

$currentDirectory = $_SERVER["DOCUMENT_ROOT"];
$uploadDirectory = '/apo_ahmad/Assets/Images/Medicine/';

$errors = []; // Store errors here

$fileExtensionsAllowed = ['jpeg', 'jpg', 'png']; // These will be the only file extensions allowed 

$fileName = $_FILES['Image_File']['name'];
$fileSize = $_FILES['Image_File']['size'];
$fileTmpName  = $_FILES['Image_File']['tmp_name'];
$fileType = $_FILES['Image_File']['type'];
$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
$newsTitle = $_POST['newsTitle'];
$newsDescription = $_POST['newsDescription'];
$newsLink = $_POST['newsLink'];
$newsDate = $_POST['newsDate'];

$uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {
    // Validate image properties Start.
    if (!in_array($fileExtension, $fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
    }
    if (file_exists($uploadPath)) {
        $errors[] = "A file with this name already exists";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            $_SESSION['messages'][] = ["success", 'The file ' . basename($fileName) . ' has been uploaded'];
            header('Location: /apo_ahmad/AdminPage/AP_News');
            exit;
        } else {
            $_SESSION['messages'][] = ["error", 'An error occurred.'];
            header('Location: /apo_ahmad/AdminPage/AP_News');
            exit;
        }
    } else {
        $_SESSION['messages'][] = ["error", implode(",<br>", $errors)];
        header('Location: /apo_ahmad/AdminPage/AP_News');
        exit;
    }
    // Validate image properties End.

    
}
