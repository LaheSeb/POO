<?php
include "header.php";

$id = (int)$_GET["id"];




try {
    $db = new PDO ($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);// si toutes les colonnes sont 


    $personnagesManager = new PersonnagesManager($db);

    $perso = $personnagesManager->getOne($id);


    print('<table>');
    print('<tr>');
    print('<td>'.$perso->getNom().'</td>');
    print('<td>'.$perso->getForce().'</td>');
    print('<td>'.$perso->getDegats().'</td>');
    print('<td>'.$perso->getExperience().'</td>');
    print('<td>'.$perso->getNiveau().'</td>');
    print('</tr>');
    print('</table>');
    print('');
    print('');
    print('');
    print('');


    

   }
    
 catch (PDOException $e) {
    print('<br>Erruer de connexion : ' . $e->getMessage());
}

?>