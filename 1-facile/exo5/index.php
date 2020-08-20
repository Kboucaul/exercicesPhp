<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$table = mt_rand(1, 15);
	echo "<p>";
		echo "Table choisie : <strong>${table}</strong><br/>";
		for($i = 1; $i < 11; $i++)
		{
			$result = $table * $i;
			echo "${table} x ${i} = ${result}<br/>";
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
