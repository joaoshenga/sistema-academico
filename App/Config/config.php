<?php
class Database
{   
    private $host = "localhost";
    private $db_name = "sistema_acad";
    private $username = "root";
    private $password = "";
    public $conn;
	Private $options= array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
     
    public function connect_db()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, $this->options);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }//____
}
?>