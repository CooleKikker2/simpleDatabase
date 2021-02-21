<?php
    //Disable Default errors
    error_reporting(0);

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
            $this->database = $db;
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
    }


?>