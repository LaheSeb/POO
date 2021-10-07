<?php

class terrainDeCombat 
{
    public function lancerUnCombat(Personnnage $perso1, Personnage $perso2)
    {
        $perso1->frapper($perso2);
        
    }
}
