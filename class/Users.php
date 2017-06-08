<?php
class Users {
    private $id;
    private $nom;
    private $prenom;
    private $email;

    public function __construct() {
        $db = new PDO(BDD_DRIVER.':host='.BDD_SERVER.';dbname='.BDD,BDD_USER,BDD_MDP);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function setNom($name) {
        $this->name = $name;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setPrenom($prenom) {
        $this->name = $prenom;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($mail) {
        $this->email = $mail;
    }

    function createUser(array $tabUser) {
        $reqInsertUser = 'INSERT INTO Users (`nom`, `prenom`, `email`) VALUES ';
        $reqInsertUser .= '(:nom, :prenom, :email)';

        $user = $this->db->prepare($reqInsertUser);
        $user->execute($tabUser);

        return $this->db->lastInsertId();
    }
}
 ?>
