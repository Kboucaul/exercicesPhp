<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La boucle while"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$nb = mt_rand(1, 20);
	$etape = 1;
	echo "<p>";
	while (1)
	{
		if ($nb < 15)
		{
			echo "Essai ${etape} : ";
			echo "${nb} est trop petit (< 15)<br/>";
			$nb = mt_rand(1, 20);
		}
		else
		{
			echo "Le nombre choisi est : ${nb}";
			break;
		}
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
