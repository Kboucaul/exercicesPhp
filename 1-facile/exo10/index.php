<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les fonctions (Partie 2)"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	function isVowel($char)
	{
		if ($char == 'a' || $char == 'A')
			return true;
		else if ($char == 'e' || $char == 'E')
			return true;
		else if ($char == 'i' || $char == 'I')
			return true;
		else if ($char == 'o' || $char == 'O')
			return true;
		else if ($char == 'u' || $char == 'U')
			return true;
		else if ($char == 'y' || $char == 'Y')
			return true;
		else
			return false;
	}
	function removeVowels($mot)
	{
		$newMot = [];
		$i= 0;
		while ($i < (strlen($mot) - 1))
		{
			if (isVowel($mot[$i]) == false)
			{
				array_push($newMot, $mot[$i]);
			}
			$i++;
		}
		return (implode("", $newMot));
	}

	$mot = "coucou";
	echo "<p>";
		echo "Le mot choisi est <strong>${mot}</strong><br/>";
		echo "Après avoir retiré les voyelles il devient : ";
		$mot = removeVowels($mot);
		echo "<strong>${mot}</strong>";
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
