<?php
function chargerClasse( string $classe)
{
    include $classe . '.php' ; //On inclut la classe correspondante au parametre passé 
}
spl_autoload_register('chargerClasse');

print("Pour info la force faible = ".Personnage::FORCE_PETITE."<br>");
print("Pour info la force Moeynne = ".Personnage::FORCE_MOYENNE."<br>");
print("Pour info la force Grande = ".Personnage::FORCE_GRANDE."<br>");

    print("<h1>Jeu de combat</h1>");
    //Création de personnage
    $perso1 = new Personnage("Macron",50,10);
    Personnage::parler();
    
    //$perso1->definirForce(20);
    
    
    $perso2 = new Personnage("Castex",Personnage::FORCE_MOYENNE,0);
    Personnage::parler();
    //$perso2->definirForce(60);
    




    //$perso1->parler();
    //$perso1->getExperience();
    //print(" Experience = " .$perso1->gagnerExperience());


    //Ensuite on veur que perso 1 frappe perso 2
    print ("Dgats du perso 1 = " . $perso1->setNom("Mario2")->setExperience(15)->frapper($perso2)->getDegats());
    $perso2->frapper($perso1);

    print("<br>Degats du personnage 1 = " .$perso1->getDegats());
    
    print(" <br>Degats du personnage 2 = " .$perso2->getDegats());

    print("<br>-------------------------------------<br>");
   print($perso1);
   print($perso2);
   






?>