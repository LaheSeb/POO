<?php

class Brute extends Personnage {

//private $_magie; // Indique la puissance du magicien sur 100, sa capacité à produire de la magie

public function frapper(Personnage $persoAFrapper) :Personnage
{
    $persoAFrapper->_degats+=$this->_force; // On va dire que la magie du magicien represente sa force
    parent::frapper($persoAFrapper);
    return $this;
}


    
}