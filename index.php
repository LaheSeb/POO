<?php
include ("Personnage.php");

    print("<h1>Jeu de combat</h1>");
    //Création de personnage
    $perso1 = new Personnage("Macron");
    //$perso1->definirForce(20);
    $perso1->setExperience(15);
    
    $perso2 = new Personnage("Castex",60,10);
    //$perso2->definirForce(60);
    $perso2->setExperience(1);




    //$perso1->parler();
    //$perso1->AfficherExperience();
    //print(" Experience = " .$perso1->gagnerExperience());


    //Ensuite on veur que perso 1 frappe perso 2
    $perso1->frapper($perso2);
    $perso2->frapper($perso1);

    print("<br>Degats du personnage 1 = " .$perso1->getDegats());
    
    print(" <br>Degats du personnage 2 = " .$perso2->getDegats());




?>