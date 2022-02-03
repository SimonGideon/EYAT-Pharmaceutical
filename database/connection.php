<?php
class connection{
    protected $isConn;
    protected $datab;
    protected $transaction;
    //
    public function __construct($userame="root", $password="", $host="localhost", $dbname="regis", $options= []){
        $this->isCon = TRUE;
        try{
            $this->datab - new PDO("mysql;host-{$host}; dbname-{$dbname}; charset-utf8", $userame, $password, $options);
            $this ->datab->setAttribute(POD::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->
        }
    }
    {
        
    }
}?>