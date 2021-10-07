<?php

class Archer extends Personnage {


    public function frapper(Personnage $persoAFrapper) :Personnage
    {
        $persoAFrapper->_degats+=$this->_force; // On va dire que la magie du magicien represente sa force
        parent::frapper($persoAFrapper);
        return $this;
    }
    
}