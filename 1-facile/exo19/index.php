<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Formulaire et méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php

	function displayInfos($nb, $prop)
	{
		echo "<p>";
			echo "Le nombre ${nb} est ${prop}";
		echo "</p>";
	}

	function displayForm()
	{
		echo "<form method='post'>";
			echo "<p>Nombre : ";
			echo "<input type='number' name='nombre' placeholder='Saisissez un nombre' required></p>";
			echo "<input type='submit'>";
		echo "</form>";
	}

	if (isset($_POST) && isset($_POST['nombre']))
	{
			$nombre = htmlspecialchars($_POST['nombre']);
		
			if ($nombre % 2 == 0)
				$prop = "pair.";
			else
				$prop = "impair.";		
			displayInfos($nombre, $prop);
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
