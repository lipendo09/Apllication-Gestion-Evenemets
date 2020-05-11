<?php

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
   
    function __construct($filename)
    {
        include 'include/vars.php';
       
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
        $this->database=$database;
       
        $this->connect();
           
        
    }
   
    private function connect()
    {
        $Conn = mysql_connect($this->host,  $this->user,  $this->password);
        if(!$Conn)
            die("No Connection");
    $selectdb = mysql_select_db($this->database,$Conn);
    if(!$selectdb)
        die("No Database.");
       
      
    }
   
    function close()
    {
        mysql_close();
    }
   
}

?>