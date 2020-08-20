<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$nom = "Marie";
	$age = 30;
	$homme = false;

	$nom2 = "Pierre";
	$age2 = 32;
	$homme2 = true;
	echo "<p>";
		echo "Affichage première personne<br/>";
		echo $nom . " a ". $age . " ans et c'est ";
			echo ($homme == false) ? "une femme.<br/><br/>" : "un homme.<br/><br/>";

		echo "Affichage deuxieme personne<br/>";
		echo $nom2 . " a ". $age2 . " ans et c'est ";
			echo ($homme2 == false) ? "une femme.<br/>" : "un homme.<br/><br/>";
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
