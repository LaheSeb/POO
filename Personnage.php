<?php

//Présence du mot-clé class suivi du nom de la classe

class Personnage {

    //Déclaration des attributs et méthodes ici

    private $_nom = 'Inconnu';   // Son nom, par défaut 'Inconnu'
    private $_force = 50;       // LA force du personnage, par défaut 50
    private $_experience = 1;   // Son experience, par défaut 1
    private $_degats = 0;       // Ses dégats par défaut 0


    public function __construct ($nom, $force = 50 ,$degats = 20) // Constructeur demande 3 parametres
    {
        $this->setNom ($nom);
        $this->setForce($force);
        $this->setExperience(1);
        $this->setDegats($degats);
        print (" <br>Le personnage " .$nom. " est crée ");
    }

    public function __toString(){
        return $this->getNom();// " (" . $this->getDegats() .")";
    } 

    public function setNom($nom)
    {   
        if (!is_string($nom)) // S'il s'agitt pas d'un texte
        {
            trigger_error('Le nom d\'un personnage doit être un texte', E_USER_ERROR);
            return;
        }
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    

    public function setForce($force)
    {
        if (!is_int($force)) // S'il s'agitt pas d'un entier
        {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($force > 100)
        {
            trigger_error('La force d\'un personnage ne peut depasser 100', E_USER_WARNING);
            return;
        }
        $this->_force = $force;
    }

    public function getForce()
    {
        return $this->_force;
    }

    public function setDegats($degats)
    {
        if (!is_int($degats)) // S'il s'agitt pas d'un entier
        {
            trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        
        $this->_degats = $degats;
    }

    public function getDegats()
    {
        return $this->_degats;
    }



    public function setExperience($experience)
    {
        if (!is_int($experience)) // S'il s'agitt pas d'un entier
        {
            trigger_error('L\'experience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($experience > 100)
        {
            trigger_error('L\'experience d\'un personnage ne peut depasser 100', E_USER_WARNING);
            return;
        }
        
        $this->_experience = $experience;
    }

    public function parler(){// Nous declarons une metgode dont le but est d'afficher 
        print("Je suis un personnage UwU");
    }


    
    // Une méthode qui frappera un personnage (suivent la force qu'il a)
    public function frapper(Personnage $adversaire){
        // $adversaire->_degat += $this->_force;
        $adversaire->_degats = $adversaire->_degats + $this->_force;
        $this->gagnerExperience();

        print('<br>' .$adversaire . ' a été frappé par '. $this. ' -> Dégats de ' . $adversaire.' = ' . $adversaire->getDegats());



    }

   // Une méthode augmentant L'attribut $experience du peronnage
    public function gagnerExperience(){

       $this->_experience++;
       
    }

    public function getExperience(){

    return $this->$_experience;

    }
    







}




?>
