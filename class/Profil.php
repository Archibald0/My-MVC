
<?php
class Profil {
    private $id;
    private $lib;

    public function __construct() {
        $db = new PDO(BDD_DRIVER.':host='.BDD_SERVER.';dbname='.BDD,BDD_USER,BDD_MDP);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
    }

    function createProfil(array $tabProfil) {
        $reqInsertProfil = 'INSERT INTO Profil (`lib`) VALUES ';
        $reqInsertProfil .= '(:lib)';

        $profil = $this->db->prepare($reqInsertProfil);
        $profil->execute($tabProfil);

        return $this->db->lastInsertId();
    }

    public function getProfils() {
        $reqUsers = 'SELECT * FROM Profil';
        $profils = $this->db->prepare($reqUsers);

        $profils->execute();

        return $profils;
    }
}

 ?>
