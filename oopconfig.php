<?php
class Config 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'oopfile';
    
    public $conn;
    
    public function __construct()
    {
        $this->conn=mysqli_connect($this->_host, $this->_username, $this->_password)OR die("could not connect to server");
    mysqli_select_db($this->conn, $this->_database)OR die("could not connect to database");
    }
}
?>