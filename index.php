<?php
    require("config/database/database.php");

    $database = new Database("localhost", "root", "", "simpleDatabase");
    $database->connect();
    $result = $database->readAll('product');
    while($row = $result->fetch_assoc()){
        echo $row['description'];
    }


?>