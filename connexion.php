<?php
try{
    $db = new PDO ("mysql:host=localhost; dbname=admin", "root" , "");
}

catch(Exception $e){
    die("erreur: " .$e->getMessage());
}
if(extension_loaded('PDO')){
    echo 'ça marche';
}