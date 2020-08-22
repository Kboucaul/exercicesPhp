<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableaux et tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php

function displayOneItem($tab, $index)
{
	$i = 0;
	echo "Nom : ";
	echo $tab[$index]['nom'] . "<br/>";
	echo "Age : ";
	echo $tab[$index]['age'] . "<br/>";
	echo "Genre : ";
	echo $tab[$index]['genre'] . "<br/>";
}

function displayInfos($tab)
{
	$i = 0;
	echo "<p>";
	while ($i < count($tab))
	{
		displayOneItem($tab, $i);
		$i++;
		if ($i < count($tab))
			echo "---------------------<br/>";
	}
	echo "</p>";
}

$personnes = [
	[
		"nom" 	=> 	"Mathieu",
		"age" 	=>	30,
		"genre"	=>	'M'
	],
	[
		"nom" 	=> 	"Marie",
		"age" 	=>	27,
		"genre"	=>	'F'
	],
	[
		"nom" 	=> 	"Jog",
		"age" 	=>	25,
		"genre"	=>	'M'
	],
	[
		"nom" 	=> 	"Juliette",
		"age" 	=>	17,
		"genre"	=>	'F'
	],
];

displayInfos($personnes);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
