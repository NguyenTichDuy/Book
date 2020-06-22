<?php
    class Account extends Database
    {
        private $username;
        private $password;
        public $helper;

        function __construct()
        {
            parent::__construct();
            $helper = new Helper();
        }

        function getUsername()
        {
            return $this->username;
        }       
        function setUserName($_username)
        {
            $this->username = $_username;
        }
        function getPassword()
        {
            return $this->password;
        }       
        function setPassword($_password)
        {
            $this->password = $_password;
        }
    }
?>