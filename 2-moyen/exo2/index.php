<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Fichier de fonctions et tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	include('./functions.php');

	$tab1 = [2, 6, 10, 20, 9, 14];
	$tab2 = [4, 8, 2, 26, 18, 14];
	echo "<div class='row py-3 my-3'>";
		echo "<div class='col-5 bg-info mx-4'>";
			echo "<h4>Tableau 1 :</h4>";
			afficherTableau($tab1);
			echo calculerMoyenne($tab1);
			if (estTableauPair($tab1) === true)
				echo "Le tableau ne contient que des nombres pairs";
			else
				echo "Le tableau ne contient pas que des nombres pairs";
		echo "</div>";
		echo "<div class='col-5 bg-info mx-4'>";
			echo "<h4>Tableau 2 :</h4>";
			afficherTableau($tab2);
			echo calculerMoyenne($tab2);
			if (estTableauPair($tab2) === true)
				echo "Le tableau ne contient que des nombres pairs";
			else
				echo "Le tableau ne contient pas que des nombres pairs";
		echo "</div>";
	echo "</div>";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
