<?php
session_start();
class cfcontact{

    private $db;

    public function __construct()
    {
        try {

            $db = new PDO("mysql:host = localhost ;dbname=pt-eleves", 'root', '');

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $message) {
            echo "ERREUR :" . " " . $message->getMessage();
        }

        $this->bdd = $db;
    }

    public function contact($_formation, $_entretien, $_nom, $_prenom, $_email, $_telphone, $_codepostale, $_ville, $_qevnd, $_adresse, $_cnavc, $_message, $_checkbox){
        
        echo 'ok';
        
        $db = $this->bdd;

        $formation = htmlspecialchars($_formation);
        $entretien = htmlspecialchars($_entretien);
        $nom =  htmlspecialchars($_nom);
        $prenom = htmlspecialchars($_prenom);
        $email = htmlspecialchars($_email);
        $telphone = htmlspecialchars($_telphone);
        $codepostale = htmlspecialchars($_codepostale);
        $ville = htmlspecialchars($_ville);
        $qevnd = htmlspecialchars($_qevnd);
        $adresse = htmlspecialchars($_adresse);
        $cnavc = htmlspecialchars($_cnavc);
        $message = htmlspecialchars($_message);
        $checkbox = htmlspecialchars($_checkbox);

        
        if (!empty($_formation) || !empty($_entretien) || !empty($_nom) || !empty($_prenom) || !empty($_email) || !empty($_telphone) || !empty($_codepostale) || !empty($_ville) || !empty($_qevnd) || !empty($_adresse) || !empty($_cnavc) || !empty($_message) ) {
        

            $insertinto = $db->prepare("INSERT INTO data_pt_eleves(formation, entretien, nom, prenom, email, telephone, codepostale, ville, qevnd, adresse, cnavc, message, checkbox) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $insertinto->execute(array($formation, $entretien, $nom, $prenom, $email, $telphone, $codepostale, $ville, $qevnd, $adresse, $cnavc, $message, $checkbox));
            header('Location:contact.php');

        }
    }
}
?>