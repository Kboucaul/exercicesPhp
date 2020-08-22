<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Formulaire et méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php

	function displayInfos($pseudo, $age)
	{
		echo "<p>";
			echo "<strong>" . $pseudo . "</strong>" . " a<strong> " . $age . "</strong> ans.";
		echo "</p>";
	}

	function displayForm()
	{
		echo "<form method='get'>";
			echo "<p>Votre nom : ";
			echo "<input type='text' name='pseudo' placeholder='Votre nom' required></p>";
			echo "<p>Votre age : ";
			echo "<input type='number' name='age' placeholder='Votre age' required></p>";
			echo "<input type='submit'>";
		echo "</form>";
	}

	if (isset($_GET) && isset($_GET['pseudo']))
	{
		if (isset($_GET['pseudo']) && isset($_GET['age']))
		{
			$pseudo = htmlspecialchars($_GET['pseudo']);
			$age = htmlspecialchars($_GET['age']);
			displayInfos($pseudo, $age);
		}
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
