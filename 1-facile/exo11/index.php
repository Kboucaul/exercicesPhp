<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php
	function displayTab($arr)
	{
		$i = 0;
		echo "<p>";
		while ($i < count($arr))
		{
			echo "${i}: ${arr[$i]} <br/>";
			$i++; 
		}
	echo "</p>";
	}

	$hommes = ["Matthieu", "Pierre", "Marc", "Jean"];
	$femmes = ["Morgane", "Mathilde", "Julie"];
	displayTab($hommes);
	echo "--------------------------<br/><br/>";
	displayTab($femmes);
?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
