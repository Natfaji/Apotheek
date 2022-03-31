<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: /apo_ahmad/LoginPage');
} else {
    if ($_SESSION['user_level'] === 0) {
        header('Location: /apo_ahmad/MijnApo');
    }
}
$page = 'AdminDashboard'
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
    <link rel="stylesheet" href="/apo_ahmad/CSS/All.css">
    <link rel="stylesheet" href="/apo_ahmad/CSS/AdminNavigation.css">
    <link rel="stylesheet" href="/apo_ahmad/CSS/AdminDashboard.css">
    <script src="/apo_ahmad/JS/ActiveNav.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/Header.inc.php' ?>
    </Header>

    <main>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/SideNav.inc.php' ?>
        <section class="page-content">
            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/inc/messages.inc.php' ?>
            <!-- -- Start -->
            <form action="/apo_ahmad/PHP/OpeningHours.php" method="post">
                <h3>Openings tijden</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Dag</th>
                            <th>Van</th>
                            <th>Tot</th>
                            <th>Dicht</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Maandag</td>
                            <td><input type="time" name="OHFMonday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTMonday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Dinsdag</td>
                            <td><input type="time" name="OHFTuesday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTTuesday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Woensdag</td>
                            <td><input type="time" name="OHFWednesday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTWednesday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Donderdag</td>
                            <td><input type="time" name="OHFThursday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTThursday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Vrijdag</td>
                            <td><input type="time" name="OHFFriday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTFriday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Zaterdag</td>
                            <td><input type="time" name="OHFSaturday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTSaturday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Zondag</td>
                            <td><input type="time" name="OHFSunday" id="OpeningHours"></td>
                            <td><input type="time" name="OHTSunday" id="OpeningHours"></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <input type="submit" name="submit" value="Opslaan">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <!-- -- End -->
        </section>
    </main>
</body>

</html>