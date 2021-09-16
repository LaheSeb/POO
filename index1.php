<?php
function chargerClasse( string $classe)
{
    include $classe . '.php' ; //On inclut la classe correspondante au parametre passé 
}
spl_autoload_register('chargerClasse');
include "conf.php";


try {
    $db = new PDO ($dsn, $user, $password);

    $personnagesManager = new PersonnagesManager($db);
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