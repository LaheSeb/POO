<?php

include "header.php";


try {
    $db = new PDO ($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);// si toutes les colonnes sont 


$unMagicien = new Magicien(
    [
    'id'=>7,
    'nom'=>"Gandaf",
    'force'=>20,
]);
print("<br/>Mon nouveau personnage = ".$unMagicien->getNom());


$unAutrePerso = new Archer (
    [  'id'=>8,
    'nom'=>"Legolas",
    'force'=>20,
]);
print("<br/>Mon nouveau personnage = ".$unAutrePerso->getNom());













    $personnagesManager = new PersonnagesManager($db);
   $personnages = $personnagesManager->getList();
    print('<br>Liste des personnages : ');
   foreach ($personnages as $personnage)
   {
       print('<br> <a href="personnage_view.php?id='.$personnage->getId().'">' . $personnage->getNom().'</a>');
   

   }
   /* $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    if($db){
        print('<br> Lecture dans la base de données :');
        $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM personnages; ');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC))// Chauqe entrée seta recuoerer
        {
            // On passe les donnés (stock"s dans un tableau) concernant le personnae

            $perso= new Personnage($ligne);
            print('<br>' .$perso->getNom().' = ' .$perso->getForce() . ' de force, ' .$perso->getDegats(). ' de degats, '
            . $perso->getExperience(). ' de experience,' .$perso->getNiveau(). 'de Niveau.');
        }
    }*/
} catch (PDOException $e) {
    print('<br>Erruer de connexion : ' . $e->getMessage());
}





?>