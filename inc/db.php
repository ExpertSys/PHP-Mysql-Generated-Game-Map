<?php
    class Database{
        private $config;
        protected $sql;

        public function __construct(){
            $this->Connect();
        }

        public function Connect(){
            $this->config  = parse_ini_file("config.ini");
            $con = $this->config;
            $this->sql = new PDO("mysql:host={$con['host']}; dbname={$con['dbname']}",
            $con['username'],$con['password']);
            $this->sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
?>
