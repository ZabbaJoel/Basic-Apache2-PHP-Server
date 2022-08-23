<?php require('UserInfo.php'); ?>

<html>
<body>
    <?php $newmessage = $_POST["message"]?>
    <h1>Thanks for your submission</h1>
    <h3><?="You added: " . $newmessage?></h3>
    <?php
        $entry = date('F jS Y h:i:s A') . " | " . $_SERVER["REMOTE_ADDR"] . ": " . $newmessage;
        $logfile = fopen("./submissionlog.txt", "a") or die("Unable to open file!\n\n<a href=\"index.php\">Back Home</a>");
        fwrite($logfile, $entry);
        fwrite($logfile, "\n");
        fclose($logfile);
    ?>
    <br>
    <br>
    <a href="./index.php">Back Home</a>
</body>
</html>