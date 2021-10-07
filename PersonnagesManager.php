<?php
class PersonnagesManager
{
    private $_db;
    
    public function setDb($db){
        $this->_db = $db;
    }
    public function __construct($db){
        $this->setDb($db);

    }
    public function add(Personnage $perso):Personnage{

    }
    public function delete(Pesonnage $perso):bool{

    }
    public function getOne(int $id){
        $sth = $this->_db->prepare("SELECT id, nom, `force`, degats, niveau, experience FROM personnages Where id =? ");
        $sth->execute(array($id));
        $ligne = $sth->fetch();

        $perso = new Personnage($ligne);
        return $perso;

    }
    public function getList():array{

        $listeDePersonnage = array();
        // retourne la liste de tous les perosnnages 
        $request = $this->_db->query('SELECT id, nom, `force`, degats, niveau, experience, classe FROM personnages; ');

        while ($ligne = $request->fetch(PDO::FETCH_ASSOC))// Chauqe entrée seta recuoerer
        {
            // On passe les donnés (stock"s dans un tableau) concernant le personnae
            switch ((int)($ligne['classe'])) {
                case Personnage::MAGICIEN:
                    # code...
                    $perso =new Magicien($ligne);
                    break;
                    case Personnage::ARCHER:
                        # code...
                        $perso =new Archer($ligne);
                        break;
                        case Personnage::BRUTE:
                            # code...
                            $perso =new Brute($ligne);
                            break;
                default:
                    
                    break;
            }
            
            $listeDePersonnage[] = $perso; // Ajouter personnage au tableau 
          
        }
        return $listeDePersonnage;

    }
    
}




?>