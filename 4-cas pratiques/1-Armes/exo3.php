<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 : Tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

echo "<p><strong>Voici toutes les armes : <br/></strong></p>";
$myClassArmePath = __DIR__ . DIRECTORY_SEPARATOR . "Classes" . DIRECTORY_SEPARATOR . "Arme.class.php";
require_once($myClassArmePath);



$arme1 = new Arme("Epée", 1, 4);
$arme2 = new Arme("Arc", 3, 2);
$arme3 = new Arme("Hache", 1, 4);
$arme4 = new Arme("Fléau", 1, 4);

if (isset($_GET['levelEpée']))
{
	$arme1->setLevelArme($_GET['levelEpée']);
	$arme1->setPicture();
}

$armesTab = [$arme1, $arme2, $arme3, $arme4];
foreach($armesTab as $arme)
{
	echo $arme;
}


?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
