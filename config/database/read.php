<?php

    class Read{
        function __construct($conn, $table){
            $this->conn = $conn;
            $this->table = $table;
        }

        function readAll(){
            $query = "SELECT * FROM `$this->table`";
            if($result = $this->conn->query($query)){
                return $result;
            }else{
                die("<p style='color:red'>Reading failed. The error is:<b> " . $this->conn->error ."</b></p>");
            }
        }
    }

?>