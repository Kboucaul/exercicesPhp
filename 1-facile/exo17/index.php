<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableaux complexes"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php

function displayNotes($notes)
{
	$i = 0;
	while ($i < count($notes))
	{
		echo "		" . $notes[$i];
		$i++;
		if ($i < count($notes))
			echo ", ";
	}
	echo "<br/>";
}

function displayOneItem($tab, $index)
{
	$i = 0;
	echo "Nom : ";
	echo $tab[$index]['nom'] . "<br/>";
	echo "Age : ";
	echo $tab[$index]['age'] . "<br/>";
	echo "Genre : ";
	echo $tab[$index]['genre'] . "<br/>";
	echo "Notes : ";
		displayNotes($tab[$index]["notes"]);
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
		"genre"	=>	'M',
		"notes"	=> [
			8,
			5,
			18
		]
	],
	[
		"nom" 	=> 	"Marie",
		"age" 	=>	27,
		"genre"	=>	'F',
		"notes"	=> [
			12,
			14,
			16
		]
	],
	[
		"nom" 	=> 	"Jog",
		"age" 	=>	25,
		"genre"	=>	'M',
		"notes"	=> [
			17,
			11,
			19
		]
	],
	[
		"nom" 	=> 	"Juliette",
		"age" 	=>	17,
		"genre"	=>	'F',
		"notes"	=> [
			13,
			14,
			15
		]
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
