<?php
    require("config/database/database.php");

    $database = new Database("localhost", "root", "", "");
    //$database->connect();
    echo($database->hash("TestBAse"));


?>