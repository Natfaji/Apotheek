<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: /apo_ahmad/LoginPage');
} else {
    if ($_SESSION['user_level'] === 0) {
        header('Location: /apo_ahmad/MijnApo');
    }
}
$page = 'AdminNews'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" type="image/png" href="/apo_ahmad/Assets/LOGO/LOGO.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/apo_ahmad/CSS/style.css">
    <link rel="stylesheet" href="/apo_ahmad/CSS/AdminNavigation.css">
    <link rel="stylesheet" href="/apo_ahmad/CSS/AdminNews.css">
    <script src="/apo_ahmad/JS/expand_menu.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
    </Header>

    <main>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/SideNav.inc.php' ?>
        <section class="page-content">
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/messages.inc.php' ?>

            <form action="">
                <label for="quantity">Number of news to show:</label>
                <input type="number" id="quantity" name="quantity" min="1">
                <input type="submit">
            </form>
            <form action="/apo_ahmad/PHP/AdminNewsUpload.php" enctype="multipart/form-data" method="post">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th class="news_Id">Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Date</th>
                            <th>Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="news_Id"><input class="news_Id_Input" type="text" disabled></td><!-- News ID - Not changeable -->
                            <td><input type="file" name="Image_File" id="Image_File"></td> <!-- News Image file to upload -->
                            <td><input type="text" name="newsTitle" placeholder="Title"></td> <!-- required -->
                            <td><textarea name="newsDescription" placeholder="Description" cols="30" rows="10"></textarea></td>
                            <td><input type="text" name="newsLink" placeholder="Link"></td>
                            <td><input type="datetime-local" name="newsDate" id=""><span class="validity"></span></td> <!-- required -->
                            <td><input type="submit" name="submit" value="Upload"></td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/AdminNews.inc.php' ?>
                </tbody>
            </table>

        </section>

    </main>
</body>

</html>