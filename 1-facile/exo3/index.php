<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$nb = 7;
	echo "<p>";
		if ($nb <= 0)
			echo "Le nombre ${nb} est soit négatif soit égale a 0";
		else if ($nb > 0 && $nb < 6)
			echo "Le nombre ${nb} est compris entre 1 et 5";
		else if($nb > 5 && $nb < 10)
			echo "Le nombre ${nb} est compris entre 5 et 10";
		else if ($nb > 10 && $nb < 16)
			echo "Le nombre ${nb} est compris entre 10 et 15";
		else if ($nb > 15 && $nb < 21)
			echo "Le nombre est compris entre 15 et 20";
		else
			echo "Le nombre est superieur a 20";
	echo "</p>";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
