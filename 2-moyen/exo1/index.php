<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableaux à deux dimensions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	function createArrayMult()
	{
		$tabPrincip = [];
		$i = 1;
		while ($i <= 10)
		{
			$j = 0;
			$tabSecond = [];
			while ($j < 10)
			{
				array_push($tabSecond, (($j + 1) * $i));
				$j++;
			}
			array_push($tabPrincip, $tabSecond);
			$i++;
		}
		return $tabPrincip;
	}

	function displayHeader($mult)
	{
		echo "<thead><tr>";
		$j = 0;
		while ($j < 10)
		{
			echo "<th>";
			echo $mult[0][$j];
			echo "</th>";
			$j++;
		}
		echo "</tr><thead>";
	}

	function displayBody($mult)
	{
		$i = 1;
		while ($i < 10)
		{
			$j = 0;
			echo "<tr>";
			while ($j < 10)
			{
				echo "<td>";
				echo $mult[$i][$j];
				echo "</td>";
				$j++;
			}
			echo "</tr>";
			$i++;
		}
	}

	function displayMultTab($mult)
	{
		echo "<table class='table table-success'>";
		displayHeader($mult);
		displayBody($mult);
		echo "</table>";
	}

	$multTab = createArrayMult();
	displayMultTab($multTab);
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
