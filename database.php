<?php
class DbConnect{
    // public $connexionDataBase;

    // public function __construct(){
    //     try{
    //         $this->connexionDataBase = new PDO("mysql:host=db.poo.com;dbname=hotel_db", "admin", "admin");
    //     }catch(PDOException $e){
    //         $this->connexionDataBase = $e->getMessage();
    //     }
    // }

    public function dbConnexion(){
        $conn = null;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=cours_db", "root", "");
        }catch(PDOException $e){
            $conn = $e->getMessage();
        }
        return $conn;
    }
}