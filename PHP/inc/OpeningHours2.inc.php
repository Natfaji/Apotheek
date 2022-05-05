<?php

//start database connection
require_once $_SERVER["DOCUMENT_ROOT"] . '/apo_ahmad/PHP/db_connection.php';

$sql = "SELECT * FROM openinghours";

$results = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($results)) {
?>
    <tr>
        <td><?php echo $data[1] ?></td>
        <input type="hidden" name="<?php echo $data[0] ?>[OH[id<?php echo $data[0] ?>]]" value="<?php echo $data[0] ?>">
        <td><input type="time" name="<?php echo $data[0] ?>[OH[F<?php echo $data[0] ?>]]" id="OpeningHours" value="<?php echo $data[2] ?>"></td>
        <td><input type="time" name="<?php echo $data[0] ?>[OH[T<?php echo $data[0] ?>]]" id="OpeningHours" value="<?php echo $data[3] ?>"></td>
        <td>
            <label class="switch">
                <input type="hidden" name="<?php echo $data[0] ?>[OH[C<?php echo $data[0] ?>]]" value="0">
                <input type="checkbox" name="<?php echo $data[0] ?>[OH[C<?php echo $data[0] ?>]]" <?php if ($data[4]) echo "Checked" ?> value="1">
                <span class="slider round"></span>
            </label>
        </td>
    </tr>
<?php
}
?>