<?php

//Présence du mot-clé class suivi du nom de la classe

class Personnage {

    //Déclaration des attributs et méthodes ici

    private $_nom = 'Inconnu';   // Son nom, par défaut 'Inconnu'
    private $_force = 50;       // LA force du personnage, par défaut 50
    private $_experience = 1;   // Son experience, par défaut 1
    private $_degats = 0;       // Ses dégats par défaut 0

    public function definirForce($force)
    {
        $this->_force = $force;
    }

    public function definirDegats($degats)
    {
        $this->_degats = $degats;
    }

    public function afficherDegats()
    {
        return $this->_degats;
    }



    public function definirExperience($experience)
    {
        $this->_experience = $experience;
    }

    public function parler(){// Nous declarons une metgode dont le but est d'afficher 
        print("Je suis un personnage UwU");
    }


    
    // Une méthode qui frappera un personnage (suivent la force qu'il a)
    public function frapper($adversaire){
        // $adversaire->_degat += $this->_force;
        $adversaire->_degats = $adversaire->_degats + $this->_force;
        $this->gagnerExperience();



    }

   // Une méthode augmentant L'attribut $experience du peronnage
    public function gagnerExperience(){

       $this->_experience++;
       
    }

    public function afficherExperience(){

    return $this->$_experience;

    }
    







}




?>
