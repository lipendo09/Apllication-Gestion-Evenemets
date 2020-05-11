<?php

    class DB
    {
        protected $host = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $database = "evenement";
        protected $db;

        public function __construct($host = null, $username = null, $password = null, $database = null)
        {
            if($host != null)
            {
                $this->host = $host;
                $this->username = $username;
                $this->password = $password;
                $this->database = $database;
            }

            try
            {
                $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database.'', $this->username, $this
                    ->password, array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                    ));
            } catch(PDOException $e){
                die('Erreur de connexion a la base de donnees');
            }
        }

        public function query($sql)
        {
            $req = $this->db->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
    }





?>