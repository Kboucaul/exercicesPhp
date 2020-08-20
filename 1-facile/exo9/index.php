<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$nb = mt_rand(0, 20);
	echo "<p>";
	echo "Le nombre choisi est <strong>${nb}</strong><br/>";
	function isPair($nb)
	{
		if ($nb % 2 == 0)
			return true;
		return false;
	}
	echo "<strong>${nb}</strong> est un nombre ";
	echo (isPair($nb)) ? "<strong>pair</strong>." : "<strong>impair</strong>.";
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
