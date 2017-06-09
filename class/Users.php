<?php
class Users {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $profil;

    public function __construct() {
        $db = new PDO(BDD_DRIVER.':host='.BDD_SERVER.';dbname='.BDD,BDD_USER,BDD_MDP);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
    }

    public function getUsers() {
        $reqUsers = 'SELECT * FROM Users JOIN Profil ON Profil.id = Users.profil';
        $users = $this->db->prepare($reqUsers);

        $users->execute();

        return $users;
    }

    public function getUser($id) {
        $reqUser = 'SELECT * FROM Users WHERE id=:id';
        $user = $this->db->prepare($reqUser);

        $user->execute(array('id' => $id));
        $user = $user->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function createUser(array $tabUser) {
        $reqInsertUser = 'INSERT INTO Users (`nom`, `prenom`, `email`, `profil`) VALUES ';
        $reqInsertUser .= '(:nom, :prenom, :email, :profil)';

        $user = $this->db->prepare($reqInsertUser);
        $user->execute($tabUser);

        return $this->db->lastInsertId();
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function setNom($name) {
        $this->nom = $name;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($mail) {
        $this->email = $mail;
    }
}
 ?>
