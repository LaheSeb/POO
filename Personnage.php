<?php

//Présence du mot-clé class suivi du nom de la classe

class Personnage {

    //Déclaration des attributs et méthodes ici
    private $_id ;
    private $_nom = 'Inconnu';   // Son nom, par défaut 'Inconnu'
    private $_force =50 ;       // LA force du personnage, par défaut 50
    private $_degats  =0;       // Ses dégats par défaut 0
    private $_experience =1;   // Son experience, par défaut 1
    private $_niveau = 0;

    const FORCE_PETITE =20;
    const FORCE_MOYENNE =50;
    const FORCE_GRANDE =80;

    // Variable statique privée
    private static $_texteADire = "<br> La partie est démarée qui veut se batte ? <br>";
    private static $_nbrJoeurs = 0;

    public function __construct ( string $nom, int $force = 50 ,int $degats = 0) // Constructeur demande 3 parametres
    {
        $this->setId($id);
        $this->setNom ($nom);
        $this->setForce($force);
        $this->setExperience(1);
        $this->setDegats($degats);
        $this->setNiveau($niveau);
        self::$_nbrJoeurs++;
        print (" <br>Le personnage " .$nom. " est crée ");
    
    }

    public function __toString():string{
        return '<br> Joeur '.$this->getNom(). ' Force = '
        .$this->getForce().' Degats = '
        .$this->getDegats();// " (" . $this->getDegats() .")";
    } 

    public function setId (int $id):Peronnage{
        if (!is_int($id)) // S'il s'agitt pas d'un texte
        {
            trigger_error('L\'Id d\'un personnage doit être un entier', E_USER_ERROR);
            return $this;
        }
        $this->_id = $id;
        return $this;

}

    public function getId():string
    {
        return $this->_id;
    }


    
    public function setNiveau (int $niveau):Personnage{
        if (!is_int($niveau)) // S'il s'agitt pas d'un texte
        {
            trigger_error('Le niveau d\'un personnage doit être un entier', E_USER_ERROR);
            return $this;
        }
        $this->_niveau = $niveau;
        return $this;

}

    public function getNiveau():string
    {
        return $this->_niveau;
    }



    public function setNom(string $nom):Personnage //Cette methode renvoi un personne 
    {   
        if (!is_string($nom)) // S'il s'agitt pas d'un texte
        {
            trigger_error('Le nom d\'un personnage doit être un texte', E_USER_ERROR);
            return $this;
        }
        $this->_nom = $nom;
        return $this;
    }

    public function getNom():string
    {
        return $this->_nom;
    }
    

    public function setForce(int $force):Personnage
    {
        if (!is_int($force)) // S'il s'agitt pas d'un entier
        {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return $this;
        }
        if ($force > 100)
        {
            trigger_error('La force d\'un personnage ne peut depasser 100', E_USER_WARNING);
            return $this;
            
        }if (in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE))){
            $this->_force = $force;
        }
        else {
            trigger_error('LA force n\'est pas correct', E_USER_ERROR);
            return $this;
        }
        
        return $this;
    }

    public function getForce():int
    {
        return $this->_force;
    }

    public function setDegats(int $degats):Personnage
    {
        if (!is_int($degats)) // S'il s'agitt pas d'un entier
        {
            trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return $this;
        }
        
        $this->_degats = $degats;
        return $this;
    }

    public function getDegats():int
    {
        return $this->_degats;
    }



    public function setExperience(int $experience):Personnage
    {
        if (!is_int($experience)) // S'il s'agitt pas d'un entier
        {
            trigger_error('L\'experience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return $this;
        }

        if ($experience > 100)
        {
            trigger_error('L\'experience d\'un personnage ne peut depasser 100', E_USER_WARNING);
            return $this;
        }
        
        $this->_experience = $experience;
        return $this;
    }

    public  static function parler(){// Nous declarons une metgode dont le but est d'afficher 
        print('Je suis le  personnage n°'.self::$_nbrJoeurs.' UwU' .self::$_texteADire);
    }


    
    // Une méthode qui frappera un personnage (suivent la force qu'il a)
    public function frapper(Personnage $adversaire):Personnage{
        // $adversaire->_degat += $this->_force;
        $adversaire->_degats = $adversaire->_degats + $this->_force;
        $this->gagnerExperience();

        print('<br>' .$adversaire . ' a été frappé par '. $this. ' -> Dégats de ' . $adversaire.' = ' . $adversaire->getDegats());
        return $this;



    }

   // Une méthode augmentant L'attribut $experience du peronnage
    public function gagnerExperience():Personnage{

       $this->_experience++;
       return $this;
       
    }

    public function getExperience():int{

    return $this->$_experience;

    }
    







}




?>
