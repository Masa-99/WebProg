<?php
    $host = "db-training.informatik.fh-nuernberg.de";
    $database = "min19_skibinma71529_tm";
    $username = "min19_skibinma71529";
    $password = "2mal2plus4";

    $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $database, $username, $password);
?>