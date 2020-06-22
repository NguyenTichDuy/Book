<?php 
    class Database 
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $dbname = "";
        private $con = null;

        function __construct()
        {
            $this->db_connect();
        }
        
        function db_connect()
        {
            try {
                if (is_null($this->con))
                {
                    $this->con = new PDO("mysql:host=" . $this->host .";dbname=". $this->dbname, 
                    $this->user, $this->pass);
                    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                }
            }
            catch(PDOException $e)
            {
                echo "Lỗi: ".$e->getMessage();
            }
        }
        function db_disconnect()
        {
            if (!is_null($this->con))
            {
                $this->con = null;
            }
        }
        function __destruct()
        {
            $this->db_disconnect();
        }
    }

