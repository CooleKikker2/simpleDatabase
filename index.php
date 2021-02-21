<?php
    require("config/database/database.php");

    $database = new Database("localhost", "root", "", "simpleDatabase");
    $database->connect();
    $row = ['name', 'description'];
    $value = ['Naam', 'Beschrijving'];
    if($database->insertRow("product", $row, $value)){
        echo "Inserted item with id" . $database->getInsertId();
    };

?>