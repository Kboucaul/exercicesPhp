<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux (Partie 2)"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php

	function displayNote($prenom, $arr)
	{
		$i = 0;
		echo "<p>Notes de ${prenom} : ";
		while ($i < count($arr))
		{
			echo $arr[$i];
			$i++;
			if ($i < count($arr))
				echo ' , ';
		}
		echo "</p>";
	}

	function myAvg($arr)
	{
		$i = 0;
		$avg = 0;
		if (count($arr) === 0)
		{
			return 0;
		}
		while ($i < count($arr))
		{
			$avg += $arr[$i];
			$i++;
		}
		$avg /= count($arr);
		return round($avg, 2);
	}

	$marc = [12, 15, 13, 7, 18];
	$mathieu = [11, 14, 10, 4, 20, 8, 2];

	displayNote("Marc", $marc);
	displayNote("Mathieu", $mathieu);

	$avgMarc = myAvg($marc);
	$avgMat = myAvg($mathieu);
	echo "<p>";
		echo "La moyenne des notes de <strong>Marc</strong> est de <strong>${avgMarc} / 20</strong>.<br/>";
		echo "La moyenne des notes de <strong>Mathieu</strong> est de <strong> ${avgMat} / 20</strong>.";
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
