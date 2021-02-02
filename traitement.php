<?php
require_once "connexion.php";


define("PREFIXE","48598135");
define("SUFFIXE","hjnUIBHJNIK");



$nom = $_POST['nom'];
$email = $_POST['email'];
$mot_de_passe = PREFIXE.hash("sha256",$_POST['mot_de_passe']).SUFFIXE;



$preparation = $db -> prepare('INSERT INTO admin_table(nom,email,mot_de_passe,) VALUES(?,?,?)');
$data = array($nom, $email, $mot_de_passe,);
$preparation-> execute($data);

?>