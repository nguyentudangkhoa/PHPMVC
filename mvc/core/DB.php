<?php
   class DB{
    public $conn;
    protected $serverName = 'localhost';
    protected $user='root';
    protected $password= '';
    protected $dbName = 'SINHVIEN';
    function __construct()
    {
        $this->conn = mysqli_connect($this->serverName,$this->user,$this->password,$this->dbName);
        mysqli_select_db($this->conn,$this->dbName);
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    }
   }

?>