<?php
require_once "connexion*.php";
$nom= $_POST['nom'];
$mot_de_passe= $_POST['mot_de_passe'];

$preparation= $db -> prepare('INSERT INTO admin_table(nom, mot_de_passe) VALUES(?,?)');
$data= array($nom, $mot_de_passe);
$preparation-> execute($data);
?>