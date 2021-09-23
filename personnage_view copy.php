<?php
include "header.php";

print("id ='" .$_GET["id"]."'");




try {
    $db = new PDO ($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);// si toutes les colonnes sont 


    

   }
    
 catch (PDOException $e) {
    print('<br>Erruer de connexion : ' . $e->getMessage());
}

?>