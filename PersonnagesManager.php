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
    public function getList():array{

        $listeDePersonnage = array();
        // retourne la liste de tous les perosnnages 
        $request = $this->_db->query('SELECT id, nom, `force`, degats, niveau, experience FROM personnages; ');

        while ($ligne = $request->fetch(PDO::FETCH_ASSOC))// Chauqe entrée seta recuoerer
        {
            // On passe les donnés (stock"s dans un tableau) concernant le personnae

            $perso= new Personnage($ligne);
            $listeDePersonnage[] = $perso; // Ajouter personnage au tableau 
          
        }
        return $listeDePersonnage;

    }
    
}




?>