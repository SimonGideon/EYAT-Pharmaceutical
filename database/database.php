<?php

include_once('connection.php'); //myconnection is here
class Database extends connection{
    public function __construct(){
        parent::__construct();//put this if naay default constructor
        //above code copy the default constructor of the class extended
        if(session_status() ==PHP_SESSION_NONE)
        {
            session_start();//start session if session not start
        }
    }//endDefaultsConstructor
    //disconnect is in parent clas in connection.php
    //get row
    public function getRow($query, $params = []){
       try {
           $stmt= $this->datab->prepare($query);
           $stmt->execute($params);
           return $stmt->fetch();
       }catch (PDOException $e) {
           throw new Exception($e->getMessage());
       }
    }//end getrows
    //get rows
    public function getRows($query, $params = []){
        try{
            $stmt = $this->datalab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        }catch (PDOException $e){
            throw new Exception($e->getMessage());
        }
    }//end getrows
    //insert row
    public function insertRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return TRUE;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }//end insertRow
    //update row
    public function updateRow($query, $params = []){
        $this->insertRow($query, $params);
        return true;
    }//end updateRow
    //delete Row
    public function deleteRow($query, $params = []){
        $this->insertRow($query, $params);
        return true;
    }//end deleteRow
    //get the last inserted ID
    public function lastID(){
        $lastID =$this->datab->lastInsertId();
        return $lastID;
    }//end lastID function
    //under construction
    public function transInsert($query, $params =[], $query2, $params2=[]){
        try {
            $this->transaction->beginTransaction();
                $stmt=$this->datab->prepare($query);
                $stmt->execute($params);
                $stmt=$this->datab->prepare($query2);
                $stmt->execute($params2);

            $this->transaction->commit();
        }   catch (PDOException $e){
            $this->transaction->rollBack();
            throw new Exception($e->getMessage());
        }
    }//end transaction function
    public function Begin(){
        $this->transaction->beginTransaction();
    }
    public function Commit(){
        $this->transaction->commit();
    }
    public function test()
    {
        echo'database class text';
    }
}
?>