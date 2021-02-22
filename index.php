<?php
    require("config/database/database.php");

    $database = new Database("localhost", "root", "", "simpleDatabase");
    $database->connect();
    $result = $database->readByRow('product','name', "Naam");
    while($row = $result->fetch_assoc()){
        echo $database->getInsertId();
    }


?>