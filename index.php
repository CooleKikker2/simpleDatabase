<?php
    require_once("config/database/database.php");

    $database = new Database("localhost", "root", "", "simpleDatabase");
    $database->connect();

?>