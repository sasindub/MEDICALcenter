<?php
class DataBase{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    protected $dbHandler;
    private $error;

    public function connect(){
        $conn = 'mysql:host='. $this->dbHost. '; dbname='. $this->dbName;
        
        //keep the connection for long period
        $options = array(
            PDO::ATTR_PERSISTENT => true, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

        );

        try{
            $this->dbHandler = new PDO($conn,$this->dbUser, $this->dbPass, $options);
        }catch(PDOException $e)
        {
            $this->error = $e->getMessage();
            echo $this->error;

        }
    }

}