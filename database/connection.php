<?php
class Connection{
    protected $isConn;
    protected $datab;
    protected $transaction;
                                        //un phpmyadmin   pass phpmyadmin       dbname
    public function __construct($username="root", $password="", $host="localhost", $dbname="regis", $options = []){
        $this->isConn =TRUE;
        try{
            $this->datab = new PDO("mysql:host={$host}; dbname={$dbname}; charset-utf-8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->transaction = $this->datab;
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo 'Connected Successfully!!!';
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }//endDefaultConstructor
    //disconnect from db
    public function Disconnect(){
        $this->datab = NULL; //close connection in PDO
        $this->isConn =false;
    }//endDisconnctFunction
}//endClassDatabase
//$con - new Connection(); //for debbugging only
//echo'     debug connection';         
?>