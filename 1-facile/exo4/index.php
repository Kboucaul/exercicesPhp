<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests (Partie 2)"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$nb1 = 100;
	$nb2 = 39;

	echo "<p>";
		echo "L'utilisateur a entré les nombres ${nb1} et ${nb2}<br/>";
		$abs = abs($nb1 - $nb2);
		echo "La valeur absolue de ${nb1} - ${nb2} est égale à ${abs}<br/>";
		if ($abs < 25 || $abs > 75)
			echo "La valeur absolue ${abs} n'est pas comprise entre 25 et 75";
		else
			echo "La valeur absolue ${abs} est comprise entre 25 et 75";
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
