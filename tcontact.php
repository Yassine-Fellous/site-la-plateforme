<?php
require 'cfcontact.php';
if(isset($_POST['submit']))
{    
    $objet = new cfcontact;
    $objet->contact($_POST['formation'], $_POST['entretien'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['codepostale'], $_POST['ville'], $_POST['qevnd'], $_POST['adresse'], $_POST['cnavc'], $_POST['message'], $_POST['checkbox']);
}
?>