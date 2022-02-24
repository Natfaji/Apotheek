<?php
session_start();

if (empty($_SESSION['messages'])) {
    return;
}

$messages = $_SESSION['messages'];
unset($_SESSION['messages']);
?>
<ul>
    <?php foreach ($messages as $message) :
        switch ($message[0]) {
            case "error":
    ?>
                <div class="errorContainer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54px" height="54px" viewBox="0 0 24 24" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z" />
                    </svg>
                    <h2><?php echo $message[1]; ?></h2>
                </div>
            <?php
                break;
            case "warning":
            ?>
                <div class="errorContainer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54px" height="54px" viewBox="0 0 24 24" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z" />
                    </svg>
                    <h2><?php echo $message[1]; ?></h2>
                </div>
            <?php
                break;
            case "success":
            ?>
                <div class="errorContainer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54px" height="54px" viewBox="0 0 24 24" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z" />
                    </svg>
                    <h2><?php echo $message[1]; ?></h2>
                </div>
            <?php
                break;
            default:
            ?>
                <div class="errorContainer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54px" height="54px" viewBox="0 0 24 24" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z" />
                    </svg>
                    <h2><?php echo "code " . "\"" . $message[0] . "\"" . " is unknown"; ?></h2>
                </div>
        <?php
                break;
        }
        ?>
    <?php endforeach; ?>
</ul>