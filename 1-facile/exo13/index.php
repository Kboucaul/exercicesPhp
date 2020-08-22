<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Tableaux et fonctions"; //Mettre le nom du titre de la page que vous voulez
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
	function displayAvg($prenom, $avg)
	{
		echo "<p>";
			echo "La moyenne des notes de <strong>${prenom}</strong> est de <strong> ${avg} / 20</strong>.";
		echo "</p>";
	}

	$marc 		= [12, 15, 13, 7, 18];
	$mathieu 	= [11, 14, 10, 4, 20, 8, 2];
	$pierre 	= [5, 13, 9, 3];
	$paul		= [6, 11, 15, 2];

	displayNote("Marc", $marc);
	displayNote("Mathieu", $mathieu);
	displayNote("Pierre", $pierre);
	displayNote("Paul", $paul);
	

	echo "-----------------------------------------------<br/><br/>";
	$avgMarc = myAvg($marc);
	$avgMat = myAvg($mathieu);
	$avgPierre = myAvg($pierre);
	$avgPaul = myAvg($paul);
	displayAvg("Marc", $avgMarc);
	displayAvg("Mathieu", $avgMat);
	displayAvg("Pierre", $avgPierre);
	displayAvg("Paul", $avgPaul);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
