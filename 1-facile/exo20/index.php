<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaire et tableaux"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php

	function displayInfos($avg)
	{
		echo "<p>";
			echo "La moyenne des 3 nombres est ${avg}.";
		echo "</p>";
	}

	function displayNotes($notes)
	{
		$i = 0;
		echo "<p>";
			echo "L'utilisateur a rentré les notes suivantes : <br/>";
			while ($i < count($notes))
			{
				echo "\tNote " . ($i + 1) . " : " .$notes[$i];
				$i++;
				if ($i < count($notes))
					echo '<br/>';
			}
		echo "</p>";
	}

	function calcAvg($notes)
	{
		$i = 0;
		$avg = 0;
		while ($i < count($notes))
		{
			$avg += $notes[$i];
			$i++;
		}
		if ($avg !== 0)
			$avg /= count($notes);
		return $avg;
	}

	function displayForm()
	{
		echo "<form method='post'>";
			echo "<p>Nombre 1: ";
			echo "<input type='number' name='nombre1' placeholder='Saisissez un nombre' required></p>";
			echo "<p>Nombre 2: ";
			echo "<input type='number' name='nombre2' placeholder='Saisissez un nombre' required></p>";
			echo "<p>Nombre 3: ";
			echo "<input type='number' name='nombre3' placeholder='Saisissez un nombre' required></p>";
			echo "<input type='submit'>";
		echo "</form>";
	}

	if (isset($_POST)
		&& isset($_POST['nombre1'])
		&& isset($_POST['nombre2'])
		&& isset($_POST['nombre1'])
	)
	{
			$notes = [];
			array_push($notes, htmlspecialchars($_POST['nombre1']));
			array_push($notes, htmlspecialchars($_POST['nombre2']));
			array_push($notes, htmlspecialchars($_POST['nombre3']));
		
			displayNotes($notes);
			$avg = calcAvg($notes);	
			displayInfos($avg);
	}
	else
	{
		displayForm();
	}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
