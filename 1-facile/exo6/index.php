<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : La boucle for(Partie 2)"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$nb = mt_rand(2, 15);
	echo "<h3>";
		echo "Voici le cumul des ${nb} premiers nombres";
	echo "</h3>";
	echo "<p>";
	$etape = 1;
	$result = 0;
		for ($i = $nb; $i > 0; $i--)
		{
			echo "Etape ${etape} : 	"; 
			$result += $i;
			echo "Resultat = ${result}<br\n>";
			$etape++;
		}
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
