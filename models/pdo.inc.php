<?php



class Pdogsb
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=applifrais';
    private static $user = 'root';
    private static $mdp = '';
    private static $myPdo;
    private static $myPdoGsb = null;


    public function __construct()
    {
        Pdogsb::$myPdo = new PDO(  PdoGsb::$serveur . ';' . PdoGsb::$bdd,
        PdoGsb::$user,
        PdoGsb::$mdp);
        Pdogsb::$myPdo->query('SET CHARACTER SET utf8');

    }

    public function __destruct()
    {
        Pdogsb::$myPdo = null;
    }

    
    public static function getPdo()
    {
        if (Pdogsb::$myPdoGsb == null)
        {
            Pdogsb::$myPdoGsb = new Pdogsb();
        }
        return Pdogsb::$myPdoGsb;
        
    }

    // Lors de la connection verifie le couple identifiant/mdp d'un visiteur
    public function getVisiteur($login, $password)
    {   
        $querydb = PdoGsb::$myPdo->prepare('SELECT * FROM visiteur WHERE login = :login AND mdp = :password ');
        $querydb->bindParam(':login', $login, PDO::PARAM_STR);
        $querydb->bindParam(':password', $password, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb = $querydb->fetch();

    }

    public function getVisiteurById($id)
    {   
        $querydb = PdoGsb::$myPdo->query('SELECT nom,prenom FROM visiteur WHERE id = "'.$id.'" ');
        
        return $querydb->fetch();

        

    }


    // Lors de la connection verifie le couple identifiant/mdp d'un comptable
    public function getComptable($login, $password)
    {   
        $querydb = PdoGsb::$myPdo->prepare('SELECT * FROM comptable WHERE login = :login AND mdp = :password ');
        $querydb->bindParam(':login', $login, PDO::PARAM_STR);
        $querydb->bindParam(':password', $password, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb = $querydb->fetch();

    }



    public function getFraisForfait($userid, $month)
    {
        $querydb = PdoGsb::$myPdo->prepare('SELECT fraisforfait.id as idfrais, fraisforfait.libelle as libelle,
        lignefraisforfait.quantite as quantite FROM lignefraisforfait INNER JOIN fraisforfait ON
        fraisforfait.id = lignefraisforfait.idfraisforfait WHERE lignefraisforfait.idVisiteur = :userid 
        AND lignefraisforfait.mois = :thismonth');
        
        $querydb->bindParam(':userid', $userid, PDO::PARAM_STR);
        $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb->fetchall();
    }

    public function UpdateFraisForfait($userid, $month, $arrayfrais)
    {
        $keys = array_keys($arrayfrais);
        foreach ($keys as $idfrais)
        {
            $qte = $arrayfrais[$idfrais];
            $querydb = PdoGsb::$myPdo->prepare('UPDATE lignefraisforfait SET lignefraisforfait.quantite = :qte 
            WHERE lignefraisforfait.idVisiteur = :userid AND lignefraisforfait.mois = :thismonth AND lignefraisforfait.idFraisForfait = :idfrais');

            $querydb->bindParam(':qte', $qte, PDO::PARAM_INT);
            $querydb->bindParam(':userid', $userid, PDO::PARAM_STR);
            $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
            $querydb->bindParam(':idfrais', $idfrais, PDO::PARAM_STR);
            $querydb->execute();
        }
    }

    public function SetFraisForfait($userid, $month, $arrayfrais)
    {

        $querydb = PdoGsb::$myPdo->prepare('INSERT INTO fichefrais (idvisiteur,mois,nbJustificatifs,montantValide,dateModif,idEtat)
        VALUES (:userid,:thismonth,0,0,now(),"CR")');


        $querydb->bindParam(':userid', $userid, PDO::PARAM_STR);
        $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
        $querydb->execute();

        $keys = array_keys($arrayfrais);
        foreach ($keys as $idfrais)
        {
            $qte = $arrayfrais[$idfrais];
            $querydb = PdoGsb::$myPdo->prepare('INSERT INTO lignefraisforfait (idvisiteur,mois,idFraisForfait,quantite) 
            VALUES (:userid,:thismonth,:idfrais,:qte)');

            $querydb->bindParam(':userid', $userid, PDO::PARAM_STR);
            $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
            $querydb->bindParam(':idfrais', $idfrais, PDO::PARAM_STR);
            $querydb->bindParam(':qte', $qte, PDO::PARAM_INT);
            
            $querydb->execute();

        }
        
    }


    public function SetHorsForfait($userid, $month, $date, $wording, $amount)
    {
        $querydb = PdoGsb::$myPdo->prepare('INSERT INTO lignefraishorsforfait (idvisiteur,mois,libelle,date,montant)
        VALUES (:userid,:thismonth,:thiswording,:thisdate,:thisamount)');


        $querydb->bindParam(':userid', $userid, PDO::PARAM_STR);
        $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
        $querydb->bindParam(':thiswording', $wording, PDO::PARAM_STR);
        $querydb->bindParam(':thisdate', $date, PDO::PARAM_STR);
        $querydb->bindParam(':thisamount', $amount, PDO::PARAM_STR);
        $querydb->execute();
        
    }
    
    public function getHorsForfait($userid, $month)
    {
        $querydb = PdoGsb::$myPdo->prepare('SELECT * FROM lignefraishorsforfait WHERE lignefraishorsforfait.idvisiteur = :userid
        AND lignefraishorsforfait.mois = :thismonth');

        
        $querydb->bindParam(':userid', $userid, PDO::PARAM_STR);
        $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb = $querydb->fetchall();
    }

    
    public function DeleteHorsForfait($id)
    {
        $querydb = PdoGsb::$myPdo->prepare('DELETE FROM lignefraishorsforfait WHERE lignefraishorsforfait.id = :thisid');

        $querydb->bindParam(':thisid', $id, PDO::PARAM_STR);

        $querydb->execute();

    }

    public function RefuseHorsForfait($id)
    {
        $querydb = PdoGsb::$myPdo->prepare('UPDATE lignefraishorsforfait SET libelle = CONCAT("REFUSE: ", libelle) WHERE id = :thisid');

        $querydb->bindParam(':thisid', $id, PDO::PARAM_STR);

        $querydb->execute();

    }




    public function getFicheFraisCL()
    {
    
        $querydb = PdoGsb::$myPdo->query('SELECT idvisiteur,mois,nom,prenom FROM fichefrais 
        INNER JOIN visiteur v ON v.id=idvisiteur WHERE idEtat = "'.'CL'.'" ');

        return $querydb->fetchall();

    }

    
    
    public function getMonthFiche($userid)
    {
        $querydb = PdoGsb::$myPdo->query('SELECT mois,libelle FROM fichefrais INNER JOIN etat e ON idEtat = e.id WHERE idVisiteur = "'.$userid.'" ');

        return $querydb->fetchall();
    }
  
}  