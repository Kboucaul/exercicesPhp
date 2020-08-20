<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	$a = 3;
	$b = 5;
	$c = 7;
	echo "*****Avant Permutation*****<br/>";
	echo "<p>";
		echo "a = ${a}<br/>";
		echo "b = ${b}<br/>";
		echo "c = {$c}<br/>";
	echo "</p>";
	echo "*****Après Permutation*****<br/>";
	//process de switch de valeurs avec variable temporaire
	$tmpa = $a;
	$a = $b;
	$b = $c;
	$c = $tmpa;
	echo "<p>";
		echo "a = ${a}<br/>";
		echo "b = ${b}<br/>";
		echo "c = {$c}<br/>";
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
