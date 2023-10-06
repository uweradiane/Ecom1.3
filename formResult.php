<?php
require_once("functions.php");
var_dump($_POST);
if($_POST){
    $name = $_POST['fname'];
    if (empty($name)){
        echo "</br> Nom vide";
    }
    else{
        echo "<br> Mon nom est:  " . $name;
    }
    $nameLengthIsValid = nameLengthIsvalid($_POST['fname']);
    echo '</br>';
    var_dump($nameLengthIsValid);
    if(!$nameLengthIsValid['isValid']){
        //on fait note traitement
    }
};
    echo '</br>';
    $saltedName = addSalt($_POST['fname']);
    var_dump($saltedName);
    $encodeName = encodeName($saltedName);
     echo '</br>';
    var_dump ($encodeName);


?>
<a href ="./index.php"> retour</a>