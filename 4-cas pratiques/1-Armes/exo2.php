<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 2 : Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

echo "<p><strong>Voici toutes les armes : <br/></strong></p>";
$myClassArmePath = __DIR__ . DIRECTORY_SEPARATOR . "Classes" . DIRECTORY_SEPARATOR . "Arme.class.php";
require_once($myClassArmePath);



$arme1 = new Arme("Epée", 1, 5);
$arme2 = new Arme("Arc", 3, 2);
$arme3 = new Arme("Hache", 1, 5);
$arme4 = new Arme("Fléau", 5, 5);

$armesTab[] = $arme1;
$armesTab[] = $arme2;
$armesTab[] = $arme3;
$armesTab[] = $arme4;


echo "<strong>Affichage sans boucle</strong><br/>";
echo $arme1;
echo $arme2;
echo $arme3;
echo $arme4;

echo "<br/><strong>Affichage avec un for</strong><br/>";
for ($i = 0; $i < count($armesTab); $i++)
  echo $armesTab[$i];

echo "<br/><strong>Affichage avec un foreach</strong><br/>";
foreach($armesTab as $arme)
{
   echo $arme;
}
echo "<br/><strong>Affichage avec une boucle while</strong><br/>";
$i = 0;
while ($i < count($armesTab))
{
  echo $armesTab[$i];
  $i++;
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
