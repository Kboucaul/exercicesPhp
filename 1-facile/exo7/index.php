<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Le switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$month = mt_rand(1, 12);
	echo "Le mois correspondant à ${month} est : ";
	$list = [
		"Janvier",
		"Fevrier",
		"Mars",
		"Avril",
		"Mai",
		"Juin",
		"Juillet",
		"Aout",
		"Septembre",
		"Octobre",
		"Novembre",
		"Decembre"
	];
	echo "<p><strong>";
		switch ($month) {
			case 1:
				echo "${list[0]}";
				break;
			case 2:
				echo "${list[1]}";
				break;
			case 3:
				echo "${list[2]}";
				break;
			case 4:
				echo "${list[3]}";
				break;
			case 5:
				echo "${list[4]}";
				break;
			case 6:
				echo "${list[5]}";
				break;
			case 7:
				echo "${list[6]}";
				break;
			case 8:
				echo "${list[7]}";
				break;
			case 9:
				echo "${list[8]}";
				break;
			case 10:
				echo "${list[9]}";
				break;
			case 11:
				echo "${list[10]}";
				break;
			default:
				echo "${list[11]}";
				break;
		}
	echo "</strong></p>";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
