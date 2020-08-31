<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php


	function createForm()
	{
			echo '<select id="arme" name="arme">';
          		echo "<option>" . épée . "</option>'";
          		echo "<option>" . arc . "</option>'";
          		echo "<option>" . hache . "</option>'";
          		echo "<option>" . fléau . "</option>'";
	        echo '</select>';
	}

echo "<p><strong>Voici toutes les armes : </strong></p>";


$myClassArmePath = __DIR__ . DIRECTORY_SEPARATOR . "Classes" . DIRECTORY_SEPARATOR . "Arme.class.php";
require_once($myClassArmePath);

$arme1 = new Arme("Epée", 1, 5);
$arme2 = new Arme("Arc", 3, 2);
$arme3 = new Arme("Hache", 1, 5);
$arme4 = new Arme("Fléau", 4, 5);

$armesTab[] = $arme1;
$armesTab[] = $arme2;
$armesTab[] = $arme3;
$armesTab[] = $arme4;

createForm();

?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
