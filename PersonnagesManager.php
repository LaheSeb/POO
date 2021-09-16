<?php
class PersonnagesManager
{
    private $_db;
    
    public function setDb($db){
        $this->_db = $db;
    }
    public function __construct($db){
        $this->setDb($db);

    }
    public function add(Personnage $perso):Personnage{

    }
    public function delete(Pesonnage $perso):bool{

    }
    public function getOne(){

    }
    public function getList(){

    }
    
}




?>