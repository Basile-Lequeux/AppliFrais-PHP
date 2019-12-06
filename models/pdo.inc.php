<?php



class Pdogsb
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=base_gsb';
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


    public function getVisiteur($login, $password)
    {   
        $querydb = PdoGsb::$myPdo->prepare('SELECT * FROM visiteur WHERE login = :login AND mdp = :password ');
        $querydb->bindParam(':login', $login, PDO::PARAM_STR);
        $querydb->bindParam(':password', $password, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb = $querydb->fetch();

    }


    
    public function getComptable($login, $password)
    {   
        $querydb = PdoGsb::$myPdo->prepare('SELECT * FROM comptable WHERE login = :login AND mdp = :password ');
        $querydb->bindParam(':login', $login, PDO::PARAM_STR);
        $querydb->bindParam(':password', $password, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb = $querydb->fetch();

    }


    public function getFraisforfait($visiteur, $month)
    {
        $querydb = PdoGsb::$myPdo->prepare('SELECT * FROM lignefraisforfait WHERE idVisiteur = :userid AND mois = :thismonth ');
        $querydb->bindParam(':userid', $visiteur, PDO::PARAM_STR);
        $querydb->bindParam(':thismonth', $month, PDO::PARAM_STR);
        $querydb->execute();

        return $querydb = $querydb->fetch();

    }



}


    

