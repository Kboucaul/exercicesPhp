<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	
	function createForm()
	{
		echo "<form method='get'>";
			echo "<input type='submit' name='tous' value='tous' class='btn btn-info mr-2'>";
			echo "<input type='submit' name='chats' value='chats' class='btn btn-info mr-2'>"; 
			echo "<input type='submit' name='chiens' value='chiens' class='btn btn-info mr-2'>"; 
		echo "</form>";
	}

	function displayArray($arr)
	{
		echo "Nom : ";
		echo $arr['nom'] . "<br/>";
		echo "Age : ";
		echo $arr['age'] . "<br/>";
		echo "Type : ";
		echo $arr['type'] . "<br/>";
	}

	function createUniqueArray($tab1, $tab2)
	{
		$newTab = [];
		array_push($newTab, $tab1);
		array_push($newTab, $tab2);
		return $newTab;
	}

	function printEntity($tab)
	{
		$i = 0;
		while ($i < count($tab))
		{
			displayArray($tab[$i]);
			$i++;
			if ($i < count($tab))
				echo '----------------------<br/>';
		}
	}

	$chat1 	= [
		"nom" 	=> "Mina",
		"age" 	=> 2,
		"type" 	=> "chat"
	];
	$chien1 = [
		"nom" 	=> "Loulou",
		"age" 	=> 6,
		"type" 	=> "chien"
	];
	$chat2 	= [
		"nom" 	=> "Meow",
		"age" 	=> 1,
		"type" 	=> "chat"
	];
	$chien2 = [
		"nom" 	=> "Waou",
		"age" 	=> 12,
		"type" 	=> "chien"
	];

	//on crée les tableaux
	$chats 	= createUniqueArray($chat1, $chat2);
	$chiens = createUniqueArray($chien1, $chien2);
	

	//crée le formulaire
	createForm();

	//Traitement en fonctyion du formulaire
	if (isset($_GET))
	{
		if (isset($_GET['tous']))
		{
			printEntity($chats);
			echo "=============</br>";
			printEntity($chiens);
		}
		else if (isset($_GET['chats']))
		{
			printEntity($chats);
		}
		else if (isset($_GET['chiens']))
		{
			printEntity($chiens);
		}
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
