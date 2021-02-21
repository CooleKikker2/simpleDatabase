<?php
    //Disable Default errors
    //error_reporting(0);

    //Require insert
    require("insert.php");

    class Database {
        
        //Define Class Properties
        public $server;
        public $username;
        public $password;
        public $db;
        public $conn;

        //Constructor Functions
        function __construct($server, $username, $password, $db){
            //Set SQL server properties
            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->db = $db;
        }

        //Connect function. Function connects to database using contructor data
        function connect(){
            //Set database connection to $this->conn
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);

            //Check for connection errors. If errors send error to user screen
            if($this->conn->connect_error){
                die("<p style='color:red'>Database connection failed. The error is:<b> " . $this->conn->connect_error ."</b></p>");
            }else{
                //No errors. Return connection to user
                return $this->conn;
            }
        }

        function insertRow($table = null, $insertRow = null, $insertValue = null){
            if(isset($table) && isset($insertRow) && isset($insertValue)){
                if($this->conn){
                    //Call insert class and give connection, table and values
                    $insert = new Insert($this->conn, $table, $insertRow, $insertValue);
                    return $insert->insertValues();
                    
                }else{
                    die("<p style='color:red'>Insert failed. No connection found. First connect using \$database->connect()");
                }
            }else{
                die("<p style='color:red'>Insert failed. Could not found insert data. Usage of this command: \$database->insertRow(InsertTable, InsertRowm, InsertValue)"); 
            }
        }
    }


?>