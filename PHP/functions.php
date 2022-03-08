<?php

if (!isset($_SESSION)) {
    session_start();
}

//check if email already exist in database
function uidExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['messages'][] = ["error", 'Error unkown #001'];
        header('Location: /LoginPage');
        exit;
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createuser($conn, $firstname, $infixes, $lastname, $email, $password)
{
    //send user data to database
    $sql = "INSERT INTO users VALUES ('',?,?,?,?,?,'',current_timestamp(),'')";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['messages'][] = ["error", 'Error unkown #002'];
        header('Location: /LoginPage');
        exit;
    }

    $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $infixes, $lastname, $email, $hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION['messages'][] = ["success", 'you have successfully sign up!'];
    header('Location: /LoginPage');
    exit;
}

function loginUser($conn, $email, $password)
{
    $uidExists = uidExists($conn, $email);

    if ($uidExists === false) {
        $_SESSION['messages'][] = ["warning", 'Wrong Email or Password!'];
        header('Location: /LoginPage');
        exit;
    }

    $pwdhashed = $uidExists["password"];
    $checkpwd = password_verify($password, $pwdhashed);

    if ($checkpwd === false) {
        $_SESSION['messages'][] = ["warning", 'Wrong Email or Password!'];
        header('Location: /LoginPage');
        exit;
    } else if ($checkpwd === true) {
        $_SESSION['UId'] = $uidExists["id"];
        $_SESSION['first_name'] = $uidExists["first_name"];
        $_SESSION['infixes'] = $uidExists["infixes"];
        $_SESSION['last_name'] = $uidExists["last_name"];
        $_SESSION['email'] = $uidExists["email"];
        $_SESSION['user_level'] = $uidExists["user_level"];
        $_SESSION['date_created'] = $uidExists["date_created"];
        $_SESSION['status'] = $uidExists["status"];

        if (!$_SESSION['user_level'] == 1) {
            $_SESSION['messages'][] = ["success", 'you have successfully logged in'];
            header('Location: /MijnApo');
            exit;
        } else {
            $_SESSION['messages'][] = ["success", 'you have successfully logged in'];
            header('Location: /AdminPage');
            exit;
        }
    }
}

function importdata($conn)
{

    // $file = $_FILES["CSV_file"]["tmp_name"];
    // $file_open = fopen($file, "r");

    $file = $_FILES["CSV_file"]["tmp_name"];
    $file_open = fopen($file, "r");

    while (($csv = fgetcsv($file_open, 0, detectDelimiter($file))) !== false) {
        $data[] = $csv;
    }
    array_shift($data);
    foreach ($data as $fields) {
        $medicijnen_id = $fields[0];
        $medicijnen_name = $fields[1];
        $medicijnen_description = $fields[2];
        $medicijnen_price = $fields[3];
        $medicijnen_stock = $fields[4];
        $product_obtainability = $fields[5];

        $sql = "INSERT INTO medicijnen VALUES ('',?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['messages'][] = ["error", 'Error unkown #002'];
            header('Location: /LoginPage');
            exit;
        }

        mysqli_stmt_bind_param($stmt, "ssdii", $medicijnen_name, $medicijnen_description, $medicijnen_price, $medicijnen_stock, $product_obtainability);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}


function detectDelimiter($csvFile)
{
    $delimiters = array(
        ';' => 0,
        ',' => 0,
        "\t" => 0,
        "|" => 0
    );

    $handle = fopen($csvFile, "r");
    $firstLine = fgets($handle);
    fclose($handle);
    foreach ($delimiters as $delimiter => &$count) {
        $count = count(str_getcsv($firstLine, $delimiter));
    }

    return array_search(max($delimiters), $delimiters);
}
