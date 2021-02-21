<?php
    require("config/database/database.php");

    $database = new Database("localhost", "root", "", "simpleDatabase");
    $database->connect();
    $row = ['name', 'description', 'price'];
    $value = ['Naam', 'Beschrijving', 5.00];
    if($database->insertRow("product", $row, $value)){
        echo "Inserted item with id " . $database->getInsertId();
    };

?>